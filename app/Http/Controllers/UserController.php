<?php

namespace App\Http\Controllers;

use App\Mail\ChangePasswordMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use \Response;
use Exception;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function index(Request $request){

        $users = User::orderBy('name')->get();
        return view('users.list', compact('users'));

    }


// CREATE USERS 
    public function create(){

        $roles = Role::orderBy('name')->get();
        return view('users.create', compact('roles'));

    }

    public function store(Request $request){
        
        //exceptions 
        $except = ['role_id'];
        $password = [];
        $rules = [
            'name' => 'required|string|max:50',
            'role_id' => 'required',
        ];

        if($request->input('email')){
            $rules['email'] = 'required|string|email|max:255|unique:users';
        }else{
            $except[] = 'email'; 
        }

        if($request->input('password')){
            $rules['password'] = [
                'required',
                'string',
                'min:10',
                'regex:/[a-z]/', 
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ];
            $password['password'] = Hash::make($request->input('password'));
        }else{
            $except[] = 'password';
        }

        //validation

            //validate already return if false
        $this->validate($request, $rules);
            //merge 2+ arrays EXCEPTING the except parameters 
        $data = array_merge($request->except($except, $password));

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->roles()->sync([$request->input('role_id')]); 
        $user->save();

        if ($user->save()){
            Mail::to($user->email)->send(new ChangePasswordMail($user));
        }

        if($user){
            Session::flash('message','Usuário cadastrado com sucesso!');
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->route('users');
        }else{
            Session::flash('message', 'Erro ao cadastrar usuário.');
            Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }

    }
//
    
// READ USERS
    public function listing($id){

        $user = User::find($id);

        return view('users.list', compact('users'));
    }
//

// UPDATE USERS 

    public function edit($id){

        $roles = Role::orderBy('name')->get();
        $user = User::find($id);

        return view('users.edit', compact('roles', 'user'));
    }
    
    public function update(Request $request){
        //exceptions 

        $except = ['role_id'];
        $newPassword = [];
        $rules = [
            'name' => 'required|string|max:50',
            'role_id' => 'required',
        ];

        // find the current user to update
        $user = User::find($request->input('id'));

        //confirm if the $request input is equal to the $user current data
        if($request->input('email') != $user->email){
            $rules['email'] = 'required|string|email|max:255|unique:users';
        }else{
            $except[] = 'email'; 
        }

        //validation 
        $this->validate($request, $rules);

        $user->roles()->sync([$request->input('role_id')]); 
            //merge 2+ arrays EXCEPTING the except parameters 
        $data = array_merge($request->except($except), $newPassword);

        if($user->update($data)){
            Session::flash('message', 'Usuário atualizado com sucesso!');
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->route('users');;
        }else{
            Session::flash('message', 'Erro ao atualizar usuário.');
            Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }
    }

//

// DESTROY USERS 
    public function destroy($id){
        
        $user = User::find($id);

        if($user->delete()){
            Session::flash('message','Usuário deletado com sucesso!');
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->route('users');
        }
    }
//

    public function reset($id, $token){
     
        $user = User::find($id);

        if($token === $user->token_pass){
            return view('auth.passwords.reset', compact('user'));
        }else{
            abort(404);
        }
    }

    public function updatePassword (Request $request){
        //exceptions 

        $except = [];
        $newPassword = [];
        $rules = [];

        // find the current user to update
        $user = User::find($request->input('id'));

        //confirm if the $request input is equal to the $user current data
        if($request->input('password') != "" && !Hash::check($request->input('password'), $user->password)){
            $rules['password'] = [
                'required',
                'string',
                'min:10',
                'confirmed',
                'regex:/[a-z]/', 
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
            ];
            $newPassword['password'] = bcrypt($request->input('password'));
        }else{
            $except[] = 'password';
            $except[] = 'password_confirmation';
        }

        //validation 
        $this->validate($request, $rules);

        $data = array_merge($request->except($except), $newPassword);
 
            if($user->update($data)){
                Session::flash('message', 'Atualizado com sucesso, bem vindo!');
                Session::flash('alert-class', 'alert-success'); 
                return redirect()->route('projects');;
            }else{
                Session::flash('message', 'Erro ao atualizar senha.');
                Session::flash('alert-class', 'alert-danger'); 
                return redirect()->back();
            }
        }
   
}


<?php

namespace App\Http\Controllers;

use App\Models\Technologies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TechnologiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $technologies = Technologies::OrderBy('name')->get();

        return view('technologies.list', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $technology = Technologies::get();

        return view('technologies.create', compact('technology'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $except = ['_token'];
        $rules = [
            'name' => 'required|string|max:20',
            'icon' => 'required|image',
        ];


        $this->validate($request, $rules);
        $data = array_merge($request->except($except));

        $data['icon'] = basename($request->file('icon')->store(config('constants.path.technologies')));

        $technology = Technologies::create([
            'name' => $data['name'],
            'icon' => $data['icon'],
        ]);

        if($technology){
            Session::flash('message','Cadastrado com sucesso!');
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->route('technologies');
        }else{
            Session::flash('message', 'Erro ao cadastrar.');
            Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listing($id)
    {
        $technology = Technologies::find($id);

        return view('technologies.list', compact('technologies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $technology = Technologies::find($id);

        return view('technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $except = ['_token'];
        $rules = [
            'name' => 'required|string|max:20',
            'icon' => 'required|image',
        ];

        $technology = Technologies::find($request->input('id'));

        $this->validate($request, $rules);
        $data = array_merge($request->except($except));

        $data['icon'] = basename($request->file('icon')->store(config('constants.path.technologies')));


        if($technology->update($data)){
            Session::flash('message', 'Tecnologia atualizada com sucesso!');
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->route('technologies');
        }else{
            Session::flash('message', 'Erro ao atualizar a tecnologia.');
            Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $technology = Technologies::find($id);

        if($technology->delete()){
            Session::flash('message','Tecnologia deletada com sucesso!');
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->route('technologies');
        }
    }
}

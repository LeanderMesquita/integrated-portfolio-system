<?php

namespace App\Http\Controllers;

use App\Models\Technologies;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectsController extends Controller
{
    public function index(Request $request){
        $projects = Projects::orderby('dtCreation')->get();

        return view('projects.list', compact('projects'));
    }

//create
    public function create(Request $request){
        $project = Projects::get();
        $technologies = Technologies::orderBy('name')->get();

        return view('projects.create', compact('project', 'technologies'));
    }

    public function store(Request $request){
        $except = ['_token', 'technology_id'];
        $rules = [
            'name' => 'required|string|max:50',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'avaliable' => 'required',
            'technology_id' => 'required',
            'responsible_agency' => 'required',
            
        ];

        // dd($request->image);
        $this->validate($request, $rules);

        $data = array_merge($request->except($except));


        $uploadedImages = [];
        foreach ($request->file('image') as $image) {
            $uploadedImages[] = basename($image->store(config('constants.path.projects')));
        }
        // basename recovery only the current img name from request
        $data['image'] = $uploadedImages;
        $project = Projects::create([
            'name' => $data['name'],
            'image' => $data['image'],
            'dtCreation' => $data['dtCreation'],
            'description' => $data['description'],
            'avaliable' => ($data['avaliable'] == 1) ? true : false,
            'responsible_agency' => $data['responsible_agency'],
            'current_link' => $data['current_link'],
        ]);

        $technologiesID = $request->input('technology_id');

        $project->technologies()->sync($technologiesID);
        $project->save();

        if($project){
            Session::flash('message','Cadastrado com sucesso!');
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->route('projects');
        }else{
            Session::flash('message', 'Erro ao cadastrar.');
            Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }

    }
//    
//read
    public function listing($id){
        $project = Projects::find($id);

        return view('projects.list', compact('projects'));
    }
//
//update    
    public function edit($id){
        $technologies = Technologies::orderBy('name')->get();
        $project = Projects::find($id);
        return view('projects.edit', compact('project', 'technologies'));
    }
    
    public function update(Request $request) {
        $except = ['_token'];
        $rules = [
            'name' => 'required|string|max:50',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'avaliable' => 'required',
            'responsible_agency' => 'required',
        ];

        $project = Projects::find($request->input('id'));

        $this->validate($request, $rules);

        $data = array_merge($request->except($except));

        $uploadedImages = [];
        foreach ($request->file('image') as $image) {
            $uploadedImages[] = basename($image->store(config('constants.path.projects')));
        }

        if($project->update($data)){
            Session::flash('message', 'Projeto atualizado com sucesso!');
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->route('projects');
        }else{
            Session::flash('message', 'Erro ao atualizar o projeto.');
            Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }
    }
//
//destroy
    public function destroy($id){

        $project = Projects::find($id);

        if($project->delete()){
            Session::flash('message','Projeto deletado com sucesso!');
            Session::flash('alert-class', 'alert-success'); 
            return redirect()->route('projects');
        }
      
    }
//
}

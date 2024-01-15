<?php

namespace App\Http\Controllers;
use App\Models\Projects;
use App\Models\Technologies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* $this->middleware('auth'); */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $projects = Projects::get();
        return view('site.home', compact('projects'));
    }

    public function timeline(){
        $projects = Projects::orderBy('dtCreation')->get();
        return view('site.timeline', compact('projects'));
    }
    
    public function about(){
        return view('site.about');
    }
    public function contact(){
        return view('site.contact');
    }
    public function equipe(){
        return view('site.equipe');
    }
    public function technologies(){
        return view('site.technologies');
    }
    public function login(){
        return view('layouts.login');
    } 
    public function projects ($id, $name)
    {
        $technologies = Technologies::orderBy('id')->get();
        $projects = Projects::where('id',$id)->first();
        return view('site.page-projects', compact('projects', 'technologies'));
    }
}

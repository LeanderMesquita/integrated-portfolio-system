<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('HOME');

Auth::routes();

Route::post('/ticket', [App\Http\Controllers\MailController::class, 'store'])->name('ticket.store');
Route::post('/updatePassword', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('update.password');
Route::get('/reset/{id}/{token}', [App\Http\Controllers\UserController::class, 'reset'])->name('reset.password');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/timeline', [App\Http\Controllers\HomeController::class, 'timeline'])->name('timeline');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/equipe', [App\Http\Controllers\HomeController::class, 'equipe'])->name('equipe');
Route::get('/technologies', [App\Http\Controllers\HomeController::class, 'technologies'])->name('technologies');
Route::get('/page-projects/{id}/{name}', [App\Http\Controllers\HomeController::class, 'projects'])->name('project');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    // ROTA REGISTER PARA NÃO AUTENTICADOS
    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
});

//  ROTAS PROJETOS
Route::group(['prefix' => 'projects', 'middleware' => 'auth'], function(){
    Route::get('/', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');
    Route::get('/listing/{id}', [App\Http\Controllers\ProjectsController::class, 'listing'])->name('projects.listing');
    Route::get('/edit/{id}', [App\Http\Controllers\ProjectsController::class, 'edit'])->name('projects.edit');
    Route::post('/update', [App\Http\Controllers\ProjectsController::class, 'update'])->name('projects.update');
    Route::get('/create', [App\Http\Controllers\ProjectsController::class, 'create'])->name('projects.create');
    Route::post('/store', [App\Http\Controllers\ProjectsController::class, 'store'])->name('projects.store');
    Route::get('/destroy/{id}', [App\Http\Controllers\ProjectsController::class, 'destroy'])->name('projects.destroy');
});

//  ROTAS TECNOLOGIAS
Route::group(['prefix' => 'technologies', 'middleware' => 'auth'], function(){
    Route::get('/', [App\Http\Controllers\TechnologiesController::class, 'index'])->name('technologies');
    Route::get('/listing/{id}', [App\Http\Controllers\TechnologiesController::class, 'listing'])->name('technologies.listing');
    Route::get('/edit/{id}', [App\Http\Controllers\TechnologiesController::class, 'edit'])->name('technologies.edit');
    Route::post('/update', [App\Http\Controllers\TechnologiesController::class, 'update'])->name('technologies.update');
    Route::get('/create', [App\Http\Controllers\TechnologiesController::class, 'create'])->name('technologies.create');
    Route::post('/store', [App\Http\Controllers\TechnologiesController::class, 'store'])->name('technologies.store');
    Route::get('/destroy/{id}', [App\Http\Controllers\TechnologiesController::class, 'destroy'])->name('technologies.destroy');
});

// ROTAS USER
Route::group(['prefix' => 'users', 'middleware' => 'admin'], function(){
    Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('users');
    Route::get('/listing/{id}', [App\Http\Controllers\UserController::class, 'listing'])->name('users.listing');
    Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::post('/update', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::get('/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
});




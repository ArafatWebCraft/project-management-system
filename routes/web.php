<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ShowController;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/new-project', [ProjectController::class, 'new_project'])->name('new.project');
Route::post('/insert-project', [ProjectController::class, 'insert_project'])->name('insert.project');
Route::get('/project-list', [ProjectController::class, 'project_list'])->name('project.list');
Route::get('/add-task/{id}', [TaskController::class, 'add_task'])->name('add.task');
Route::post('/store-task/{id}', [TaskController::class, 'store_task'])->name('store.task');
Route::get('/add-member/{id}', [MemberController::class, 'add_member'])->name('add.member');
Route::post('/store-member/{id}', [MemberController::class, 'store_member'])->name('store.member');
Route::get('/show-details/{id}', [ShowController::class, 'show_details'])->name('show.details');

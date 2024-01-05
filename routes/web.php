<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
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



Route::get('/tasks', function () {

    return view('index', ['tasks' =>\App\Models\Task::all()]);
})->name('tasks.index');

Route::get('/task/{id}', function ($id) {

    return view('task', ['task' =>  \App\Models\Task::findOrFail($id)]); //Fetch one record.findOrFail method return 404 if not exist.
})->name('tasks.task');
Route::get('/', function () {
    return redirect()->route("tasks.index");
});



//  07:53  lekcija 24

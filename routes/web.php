<?php

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

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

    return view('index', ['tasks' => Task::all()]);
})->name('tasks.index');

Route::view('tasks/create', 'create')->name('tasks.create');
//Edit
Route::get('/task/{id}/edit', function ($id) {
    return view('edit', ['task' => Task::findOrFail($id)]); //Fetch one record.findOrFail method return 404 if not exist.
})->name('tasks.edit');

Route::get('/task/{id}', function ($id) {
    return view('task', ['task' => Task::findOrFail($id)]); //Fetch one record.findOrFail method return 404 if not exist.
})->name('tasks.task');
Route::get('/', function () {
    return redirect()->route("tasks.index");
});

Route::post('/tasks', function (Request $request) {
    $data = $request->validate([
        'title' => 'required | max:255',
        'description' => 'required',
        'long_description' => 'required',

    ]);
    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();
    return redirect()->route('tasks.task', ['id' => $task->id])->with('success', 'Zadatak je uspješno kreiran');
})->name('tasks.store');

Route::put('/tasks/{id}', function ($id, Request $request) {
    $data = $request->validate([
        'title' => 'required | max:255',
        'description' => 'required',
        'long_description' => 'required',

    ]);
    $task = Task::findOrFail($id);
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();
    return redirect()->route('tasks.task', ['id' => $task->id])->with('success', 'Zadatak je uspješno Izmijenjen');
})->name('tasks.update');

    //# 33 lekcija Edit i dalje

<?php


Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');


// Route::get('/tasks', function () {
//     // $tasks = DB::table('tasks')->latest()->get(); // query builder
//     $tasks = Task::all(); // Eloquent

//     // return $tasks;
//     return view('tasks.index', compact('tasks'));
// });

// Route::get('/tasks/{task}', function ($id) {
//     // dd($id);
//     // $task = DB::table('tasks')->find($id);
//     $task = Task::find($id);

//     return view('tasks.show', compact('task'));
// });

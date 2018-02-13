<?php


use App\Task;

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

 //importar a classe para enunciar a função Task

/* Route::get('/tasks', function () {
    //$tasks = DB::table('tasks')->get();
    //$tasks = DB::table('tasks')->latest()->get();
    $tasks = Task::all();
    //return $tasks;

    return view('tasks.index', compact('tasks'));
});


Route::get('/tasks/{task}', function ($id) {
    //$task = DB::table('tasks')->find($id);

    $task = Task::find($id);


    return view('tasks.show', compact('task'));
}); */
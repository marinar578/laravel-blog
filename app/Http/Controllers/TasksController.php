<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
      $tasks = Task::all(); 

      return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task) // route-model binding -> Task::find(wildcard - assumes you have a primary key)
    {
      // $task = Task::find($id);

      return view('tasks.show', compact('task'));
    }
}

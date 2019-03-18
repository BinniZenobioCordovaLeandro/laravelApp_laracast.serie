<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    public function store(Project $project){
      $attributes =  request()->validate(['description'=>'required|min:3']);
      $project->addTask($attributes);
      return back();
    }
    public function update(Request $request, Task $task)
    {
        $task->update([
          'completed' => request()->has('completed')
        ]);
        return back();
    }
}

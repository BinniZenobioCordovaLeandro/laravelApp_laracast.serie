<?php
namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
      //$projects = auth()->user()->projects; ??
      $projects = Project::all();
      return view('projects.index', compact('projects'));
    }
    public function create(){
      $projects = Project::all();
      return view('projects.create', compact('projects'));
    }
    public function store(){
      Project::create(
          request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ])
      );
      return redirect('/projects');
    }
    public function edit(Project $project){  // /projects/{project}/edit
      return view('projects.edit', compact('project'));
    }
    public function update(Project $project){
      Project::update(request()->all());
      return redirect('/projects');
    }
    public function destroy(Project $project){
      $project->delete();
      return redirect('/projects');
    }
    public function show(Project $project){
      return view('projects.show', compact('project'));
    }
}

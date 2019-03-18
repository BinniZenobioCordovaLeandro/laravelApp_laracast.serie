<?php

namespace App;

use App\Task;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable =['title', 'description'];
  protected $guarded = ['id', 'created_at','updated_at'];

  public function tasks(){
    return $this->hasMany(Task::class);
  }

  public function addTask($task){
    $this->tasks()->create($task);
    // return Task::create([
    //   'project_id' => $this->id,
    //   'description' => request('description')
    // ]);
  }
}

// $P4oject->task

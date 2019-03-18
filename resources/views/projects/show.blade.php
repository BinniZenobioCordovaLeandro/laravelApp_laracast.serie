@extends('layout')

@section('projects')
<form class="" action="/projects/{{$project->id}}/edit" method="post">
  @method('GET')
  @csrf
  <h1>{{$project->title}}</h1>
  <p>{{$project->description}}</p>
  <button type="submit" name="button">Edit</button>
</form>

  @if($project->tasks->count())
    <div class="section">
      @foreach($project->tasks as $task)

      <!-- PATCH /projects/id/tasks/id -->
      <!-- PATCH tasks/id  [*]-->

      <form action="/tasks/{{$task->id}}" method="post">
        @method('PATCH')
        @csrf
        <label for="completed" class="checkbox {{$task->completed ? 'is-complete' : ''}}">
          <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
          {{$task->description}}
        </label>
      </form>

      @endforeach
    </div>
  @endif

  <!-- add a new task -->
  <form action="/projects/{{$project->id}}/tasks" method="post">
    @csrf
    <label>New task</label>
    <input type="text" name="description" placeholder="description task's" required>
    <button type="submit" name="button">new task</button>
    @include('errors')
  </form>


@endsection

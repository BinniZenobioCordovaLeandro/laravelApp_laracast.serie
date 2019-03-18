@extends('layout')

@section('projects')
<h1>Edit a project</h1>
  <form class="control" action="/projects/{{$project->id}}" method="post">
    @method('PATCH')
    @csrf
    <div class="field">
      <label for="title">Title : </label>
      <div class="control">
        <input type="text" name="title" value="{{$project->title}}" placeholder="Write: title">
      </div>
    </div>
    <div class="field">
      <label for="description">Description : </label>
      <div class="control">
        <textarea name="description" rows="8" cols="80">{{$project->description}}</textarea>
      </div>
    </div>
    <button type="submit" name="button">update</button>
  </form>
  <form class="form" method="post" action="/projects/{{$project->id}}">
    @method('DELETE')
    @csrf
    <button type="submit" name="button">delete</button>
  </form>
@endsection

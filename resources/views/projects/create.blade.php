@extends('layout')

@section('projects')

<form action="/projects" method="post">
  @method('POST')
  @csrf
  <h1>Create a new project</h1>
  <div class="control">
    <input class="input {{$errors->has('title') ? 'is-danger' : ''}}" required type="text" name="title" placeholder="title" value="{{old('title')}}">
  </div>
  <div class="control">
    <textarea class="input {{$errors->has('description') ? 'is-danger' : ''}}" name="description" rows="8" cols="80" placeholder="description">{{old('description')}}</textarea>
  </div>
  <div class="control">
    <button class="control" type="submit" name="button">crear</button>
  </div>
</form>

  @include('errors')
@endsection

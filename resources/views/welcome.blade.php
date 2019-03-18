@extends('layout')

@section('title','welcome !')

@section('content')
  <!-- <h1>My {{!!$foo!!}} website !</h1> -->
  <h1>My {{$foo}} website !</h1>
  @foreach($tasks as $task)
  <li>{{$task}}</li>
  @endforeach
@endsection

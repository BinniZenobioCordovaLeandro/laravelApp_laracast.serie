@extends('layout')

@section('projects')
  <h1 class="title"></h1>
  <ul>
    @foreach($projects as $project)
      <li>
        <a href="/projects/{{$project->id}}">
          {{$project->id}},&nbsp;
          {{$project->title}},&nbsp;
          {{$project->description}}
        </a>
      </li>
    @endforeach
  </ul>
@endsection

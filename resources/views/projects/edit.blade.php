@extends('layout')

@section('content')

<h1>Edit Project</h1>

<form method="POST" action="/projects/{{$project->id}}" style='margin-bottom:10px'>
  @method('PATCH')
  @csrf
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" name="title" placeholder='Title' value="{{$project->title}}">
  </div>
  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" name="description">{{$project->description}}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">Update Project</button>
</form>

<form method="POST" action="/projects/{{ $project->id }}">
  @method('DELETE')
  @csrf

  <button type="submit" class="btn btn-primary">Delete Project</button>
</form>

@endsection
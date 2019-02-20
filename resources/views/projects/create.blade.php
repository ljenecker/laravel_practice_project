@extends('layout')

@section('content')

  <h1>Create a new project</h1>

  <form method="POST" action="/projects" style='margin-bottom:10px'>
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" name="title" placeholder='Title'>
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" name="description"></textarea>
    </div>
  
    <button type="submit" class="btn btn-primary">Create Project</button>
  </form>


  
@endsection
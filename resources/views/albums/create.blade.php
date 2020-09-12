@extends('layouts.app')

@section('content')
<h1>Create new Album</h1>
<form method="post" action="{{ route('album-store') }}" enctype="multipart/form-data">
    <div class="form-group">
        @csrf
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name"  placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" name="description"  placeholder="Enter description">
      </div>
      <div class="form-group">
        <label for="cover-image">Cover image</label>
        <input type="file" class="form-control" id="cover-image" name="cover-image"  >
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

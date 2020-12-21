@extends('layouts.head')

@section('content')

<form action="/create" method = "post" enctype="multipart/form-data">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

	<div class="form-group">
    <label for="text">First Name:</label>
    <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name">
  </div>
  <div class="form-group">
    <label for="text">Last Name:</label>
    <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">
  </div>
  <div class="form-group">
    <label for="text">City:</label>
    <input type="text" class="form-control" id="city_name" placeholder="Enter City" name="city_name">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="imageInput">File input</label>
    <input data-preview="#preview" class="form-control" name="image" type="file" id="image">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
@endsection




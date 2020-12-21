@extends('layouts.head')

@section('content')

<form action="/addcategory" method = "post" enctype="multipart/form-data">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

	<div class="form-group">
    <label for="text">Category Name:</label>
    <input type="text" class="form-control" id="category_name" placeholder="Enter Category Name" name="category_name">
  </div>
  <div class="form-group">
    <label for="text">Category Description:</label>
    <textarea type="text" class="form-control" id="category_desc" placeholder="Enter Category Description" name="category_desc"></textarea>
    </div>

    <div class="form-group">
      <label for="imageInput">Category Image</label>
      <input data-preview="#preview" class="form-control" name="image" type="file" id="image">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@endsection




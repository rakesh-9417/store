@extends('layouts.head')

@section('content') 

<form action="/addproduct" method = "post" enctype="multipart/form-data">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <!-- <div class="form-group">

    <label for="prouct_name">Select category:</label>
    <input type="text" class="form-control" id="prouct_name" placeholder="Enter Product Name" name="prouct_name">
   <select class="form-control">

    <option>Select Category</option>

  </select>

</div> -->
<div class="form-group">
  <label for="prouct_name">Product Name:</label>
  <input type="text" class="form-control" id="prouct_name" placeholder="Enter Product Name" name="prouct_name">
</div>
<div class="form-group">
  <label for="prouct_desc">Product Description:</label>
  <textarea type="text" class="form-control" id="prouct_desc" placeholder="Enter Product Description" name="prouct_desc"></textarea>
</div>
<div class="form-group">
  <label for="Price">Price:</label>
  <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price">
</div>
<div class="form-group">
  <label for="Qty">Qty:</label>
  <input type="text" class="form-control" id="qty" placeholder="Enter Qty" name="qty">
</div>


<div class="form-group ">
  <label for="imageInput">File input</label>  
  <input type="file" class="form-control" name="image"  id="image" >
</div>

<button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
@endsection




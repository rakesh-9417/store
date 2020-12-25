@extends('layouts.head')

@section('content')

<!-- <form action="/create" method = "post" enctype="multipart/form-data">
-->	

<div class="alert alert-success" role="alert" id="success" style="display:none;">
  Data Entered Successfully 

</div>
<form  id="myform" method="post"  enctype="multipart/form-data">

  <input type = "hidden" name = "_token" id="csrf" value = "<?php echo csrf_token(); ?>">

  
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
    <input data-preview="#preview" class="form-control image" name="image" type="file" id="image">
  </div>
  
  <button type="button" class="btn btn-default" id="butsave">Submit</button>
</form>
</div>
<script>
  $(document).ready(function() {   
   $('#butsave').on('click', function() {
      // event.preventdefault();

      var fd = new FormData();
      var files = $('#image')[0].files[0];
      fd.append('image',files);

      var formData = new FormData(document.getElementById("myform"));
      //alert('inside ajax passing variables');
      $.ajax({          
        url: "{{ url('student') }}",
        type: "POST",          
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        success:function(response)
        {
          //alert('inside response');
          if(response.success==1){                  
            $('#success').show();
            $('#myform')[0].reset();
          }else{
            alert("Error");
          }
        },
        error:function(error)
        {
                //console.log(error);
                alert('something get wrong');
              } 
            });

    });
 });
</script>
@endsection




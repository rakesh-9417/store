@extends('layouts.head')

@section('content')

<!-- <form action="/create" method = "post" enctype="multipart/form-data">
-->	

<div class="alert alert-success" role="alert" id="success" style="display:none;">
    Data Entered Successfully 
    
  </div>
<form method="POST" id="form_id">
  
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
  <!-- <div class="form-group">
    <label for="imageInput">File input</label>
    <input data-preview="#preview" class="form-control" name="image" type="file" id="image">
  </div> -->
  
  <button type="button" class="btn btn-default" id="butsave">Submit</button>
</form>
</div>
<script>
  $(document).ready(function() {
     // alert('rakesh');


     $('#butsave').on('click', function() {

       //event.preventdefault();
       
      // alert("inside");
       var first_name = $('#first_name').val();
       var last_name = $('#last_name').val();
       var city_name = $('#city_name').val();
       var email = $('#email').val();
       var url = "{{ url('student') }}";
       var type = "POST";
        
         if(first_name!="" && last_name!="" && city_name!="" && email!=""){
          //alert('hi rakesh');  

          $.ajax({          
            url: url,
            type: "POST",          
            data: {

             _token: $("#csrf").val(),
             first_name: first_name,
             last_name: last_name,
             city_name: city_name,
             email: email
           },
           cache: false,

          //cpanel start code
          success:function(response){
           

           if(response.success==1){
                  //alert(response.message) //Message come from controller
                  $('#success').show();
                 
                   $('#form_id')[0].reset();
                  //return false;
                  //window.location = "{{url('student')}}";
                  
                  
                }else{
                  alert("Error")
                }
              },
              error:function(error){
                console.log(error)
              }              
          //cpanel end here

        });
        }
        else{
          alert('Please fill all the field !');
        }
      });
   });
 </script>
 @endsection




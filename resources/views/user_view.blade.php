
@extends('layouts.head')

@section('content')
<div class="alert alert-danger" role="alert" id="alert" style="display:none;">
 <p> Data Deleted Successfully </p>
</div>
<table class="table table-bordered">

 <thead>
  <td>ID</td>
  <td>First Name</td>
  <td>Last Name</td>
  <td>Email</td>
  <td>Image</td>
  <td>Edit</td>
  <td>Delete</td>
</thead>
<tbody>

  @foreach ($users as $user)
  <tr>
   <td>{{ $user->id }}</td>
   <td>{{ $user->first_name }}</td>
   <td>{{ $user->last_name }}</td>
   <td>{{ $user->email }}</td>
   <td><img class="col-sm-6" id="preview"  src="images/{{ $user->image }}" style="height: 50px; width: 100px;"></td>
   <td class="edit"><a href = 'edit/{{ $user->id }}'>Edit</a></td>
   <!-- <td class="delete"><a onclick="return confirm('Are you sure?')" href = 'delete/{{ $user->id }}'>Delete</a></td> -->
   <td class="delete"><!-- <a onclick="return confirm('Are you sure?')" href = 'delete/{{ $user->id }}'> -->Delete<!-- </a> --></td>

 </tr>
</tbody>

@endforeach
</table>
<script>
  $(document).ready(function() {   
   $('.delete').on('click', function() {
    $(this).closest('tr').remove();

    
    var id = "{{$user->id }}";
    var url = "delete/"+id;
    
    
    $.ajax(
    {
      url: url,
        type: 'get', // replaced from put
        dataType: "JSON",
        data: {
            "id": id // method and token not needed in data
          },
          success:function(response)
          {

            if(response.success==1){ 
              $('#alert').show();                 
              
            }else{
              alert("Error");
            }
          },
          error:function(error)
          {

            alert('something get wrong');
          } 
        });

  });
 });
</script>
@endsection




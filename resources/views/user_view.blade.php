
@extends('layouts.head')

@section('content')

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
         <td><a href = 'edit/{{ $user->id }}'>Edit</a></td>
         <td><a onclick="return confirm('Are you sure?')" href = 'delete/{{ $user->id }}'>Delete</a></td>

      </tr>
   </tbody>

   @endforeach
</table>
@endsection




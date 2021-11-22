@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Users</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
	  <td>First Name</td>
	  <td>Last Name</td>
          <td>Email</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
	    <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Update</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
    <div>
    	<a style="margin: 19px;" href="{{ route('users.create')}}" class="btn btn-primary">New user</a>
    </div>  
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@endsection

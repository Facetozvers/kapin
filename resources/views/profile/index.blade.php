@extends('layouts.app')
@section('content')
<div class="card">
   <div class="card-header">Profile</div>
   <div class="card-body">
      <form action="" method="POST" enctype="multipart/form-data">
         <div class="form-group">
            @csrf

            <label for="name">Name</label>
            <input id="name" value="{{isset($user)?$user->name:old('name')}}" class="form-control" type="text" name="name">
         </div>
         <div class="form-group">
            <label for="email">Email</label>
            <input id="email" value="{{$user->email}}" class="form-control" type="email" name="email">
         </div>
         <div class="form-group">
            <button type="submit" class="btn btn-success">Update Profile</button>
         </div>
      </form>
   </div>
</div>
@endsection

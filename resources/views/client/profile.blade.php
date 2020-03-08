@extends('client.layouts')
@section('content')
<div class="col-lg-8">
        <h2 style="margin-top:20px">Edit Profile</h2>
        <form action="{{route('homepage.updateProfile')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="name">Fullname</label>
            <input type="text" class="form-control"  placeholder="Enter username" name="name" value="{{$user->name}}">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control"  placeholder="Enter Email" name="email" value="{{$user->email}}">
          </div>
          <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="date" class="form-control"  placeholder="Enter Date Of Birth" name="dob" value="{{$user->dob}}">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control"  placeholder="Enter Date Of Birth" name="phone" value="{{$user->phone}}">
          </div>
          <div class="form-group">
            <label >Role</label>
            <input type="text" class="form-control"  placeholder="Enter Date Of Birth" name="role" value="{{$user->role}}">
          </div>
          <div class="form-group">
            <label >Status</label>
            <input type="text" class="form-control"  placeholder="Enter Date Of Birth" name="is_active" value="{{$user->is_active}}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
</div>
@endsection
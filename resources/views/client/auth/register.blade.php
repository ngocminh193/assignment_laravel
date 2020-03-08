@extends('client.layouts')
@section('content')
<div class="col-lg-8">
        <h2 style="margin-top:50px">Register</h2>
        <form action="{{route('register')}}" method="POST">
          @csrf

        @if(count($errors)>0)
        <div>
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
        </div>
        @endif
          <div class="form-group">
            <label for="email">Username:</label>
            <input type="text" class="form-control" placeholder="Enter Username" name="name">
          </div>
          <div class="form-group">
            <label for="dob">Date Of Birth:</label>
            <input type="date" class="form-control"  name="dob" placeholder="Enter Date Of Birth">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control"  name="phone" placeholder="Enter Phone Number">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control"  name="email" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="password">
          </div>
          <div class="form-group">
            <label for="cfpassword">Confirm Password:</label>
            <input type="password" class="form-control" placeholder="Confirm password" name="cfpassword">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection
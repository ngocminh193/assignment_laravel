@extends('client.layouts')
@section('content')
<div class="col-lg-8">
        <h2 style="margin-top:50px">Đăng nhập</h2>
        <form action="{{route('homepage.login')}}" method="post">
        @csrf

        @if(count($errors)>0)
        <div>
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
        </div>
        @endif
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection
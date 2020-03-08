@extends('crud.layouts')

@section('contents')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Create Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('users.store')}}">
              @csrf
              @if($errors->count())
                <div class="bg-gradient-danger">
                @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                @endforeach
                </div>
              @endif
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Usename">
                  </div>
                  <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" class="form-control" name="avatar">
                  </div>
                  <div class="form-group">
                    <label for="birthday">Date of Birth </label>
                    <input  name="dob" class="form-control" type="date">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone </label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter phone number">
                  </div>
                  <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                  </div>
                  <div class="form-group">
                    <label>Role</label>
                    <select class="custom-select" name="role">
                      <option value="1">Users</option>
                      <option value="2">Admin</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio1" name="is_active" value="1">
                      <label for="customRadio1" class="custom-control-label">Active</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio2" name="is_active" value="0" checked="">
                      <label for="customRadio2" class="custom-control-label">Not Active</label>
                    </div>
                  </div>
                </div>
                  
                  <!-- /.input group -->
                </div>
                </div>
                </div>

                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
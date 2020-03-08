@extends('crud.layouts')

@section('contents')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Update Users</li>
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
              <form role="form" method="POST" action="{{ route('users.update', $user->id) }}">
              @csrf
              @method('PUT')
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
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                  </div>
                  <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <img src="value="{{ $user->name }}"" alt="">
                  </div>
                  <div class="form-group">
                    <label for="birthday">Date of Birth </label>
                    <input  name="dob" class="form-control" type="date" value="{{ $user->dob }}">
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone number </label>
                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                  </div>
                  <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                  </div>
                  <div class="form-group">
                    <label>Role</label>
                    <select class="custom-select" name="role">
                      <option @if ($user->role == 1) selected @endif value="1">User</option>
                      <option @if ($user->role == 2) selected @endif value="2">Admin</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select class="custom-select" name="is_active">
                      <option @if ($user->is_active == 1) selected @endif value="1">Active</option>
                      <option @if ($user->is_active == 0) selected @endif value="0">Not active</option>
                    </select>
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
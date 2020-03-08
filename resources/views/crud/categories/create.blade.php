@extends('crud.layouts')

@section('contents')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Create Categories</li>
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
              <form role="form" method="POST" action="{{ route('categories.store')}}">
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
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Category">
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}" >
                  </div>
                </div>
                  
                  <!-- /.input group -->
                </div>
                </div>
                </div>

                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-danger" href="{{route('categories.index')}}">Back</a>
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
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
              <form role="form" method="POST" action="{{ route('posts.update', $post->id) }}">
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
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                  </div>
                  <div class="form-group">
                    <label for="content">Content</label>
                    <input  name="content" class="form-control" type="text" value="{{ $post->content }}">
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="">
                    <img src="value="{{ $post->image }}"" alt="">
                  </div>
                  <div class="form-group">
                    <label for="like">Like </label>
                    <input type="text" class="form-control" name="like" value="{{ $post->like }}">
                  </div>
                  <div class="form-group">
                    <label for="view">View </label>
                    <input type="text" class="form-control" name="view" value="{{ $post->view }}">
                  </div>
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control is-valid" name="category_id" >
                    @foreach($category as $value)
                    @if($value->id == $post->category_id)
                      <option value="{{$value->id}}" selected>{{$value->name}}</option>
                    @else
                    <option value="{{$value->id}}" >{{$value->name}}</option>
                    @endif
                    @endforeach
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
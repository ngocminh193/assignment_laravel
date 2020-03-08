@extends('crud.layouts')

@section('contents')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Create Posts</li>
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
              <form role="form" method="POST" action="{{ route('posts.store')}}">
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
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" name="content">
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="like" value="0" >
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="view" value="0"  >
                  </div>
                  <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}" >
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control is-valid" name="category_id" >
                    @foreach($category as $value)
                      <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                    </select>
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
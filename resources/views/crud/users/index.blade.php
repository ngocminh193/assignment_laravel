@extends('crud.layouts')

@section('contents')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Users Table</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a  href="{{route('users.create')}}" class="btn btn-success col-md-1">Create</a>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" >
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>User Name</th>
                      <th>Avatar</th>
                      <th>Birthday</th>
                      <th>Phone Number</th>
                      <th>Email</th>
                      <th>Post</th>
                      <th>Role</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td><img src="{{$user->avatar}}" alt=""></td>
                      <td>{{ $user->dob }}</td>
                      <td>{{ $user->phone}}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->posts->count() }}</td>
                      <td>
                          @if ($user->role == 1) User
                          @else Admin
                          @endif
                      </td>
                      <td>                      
                          @if ($user->is_active == 1) Active
                          @else Not Active
                          @endif
                      </td>
                      <td>
                        <a class="btn btn-primary" href="{{route('users.edit', $user->id)}}">Update</a>
                        <!-- <form id="delete_form_{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}"
                         method="DELETE" style="display: none;">
                         @csrf

                        </form> -->
                        <!-- nút xóa -->
                        <a href="{{route('user.delete', ['id' => $user->id])}}"
                        onclick="return confirm('Bạn có phải là wibu ?')"  
                        class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                      </td>
                  @endforeach  
                  </tbody>
                </table>
                <!-- phân trang -->
                <div class="d-flex justify-content-center">
                {{ $users->links() }}
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@push('scripts')
<script>
    $("button[id^='btn_delete_']").click(function (event) {
        id = event.currentTarget.attributes.id.value.replace('btn_delete_', '');
        console.log('id', id);

        $("#delete_form_" + id).submit();
    });

</script>
@endpush
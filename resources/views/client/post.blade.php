@extends('client.layouts')
@section('content')
<div class="col-lg-8">
@foreach($posts as $post)
    <!-- Title -->
    <h1 class="mt-4">{{$post->title}}</h1>

    <p class="lead">Author&ensp;<b>{{$post->user_id}}</b>
    </p>
    <hr>
    <!-- Date/Time -->
    <p>Posted on <i>{{$post->created_at}}</i><i class="fa fa-eye" style="margin-left:20px"></i>{{$post->view}}
     <i class="fa fa-heart" style="margin-left:20px"></i>{{$post->like}} </p>

    <hr>

    <!-- Preview Image -->
    <img class="card-img-top" src="{{$post->image}}" height="300px" alt="Image">
    <hr>
    <!-- Post Content -->
    {{$post->content}}
@endforeach
    <!-- Comments Form -->
    <hr>
    <h5 class="card-header">Comments</h5>
    @foreach($comments as $comment)
    <div class="media mb-4">
    <img style="width:5%;height:9%" src="{{asset('dist/img/avatar.png')}}" alt="">
            <div style="display:flex;justify-content:space-between; margin-left:3%;" class="media-body">
              <p class="mt-0"><a style="color:black" href="{{route('homepage.userPosts',[$comment->user_id])}}"><b style="font-size:25px;">{{$comment->user_id}}</b></a>: {{$comment->content}}</p>
              <small><i>{{$comment->created_at}}</i></small>
            </div>
    </div>
    @endforeach
    @if(Auth::check())
    <div class="card my-4">
      <h5 class="card-header">Leave a Comment:</h5>
      <div class="card-body">
        <form action="{{route('comment'),$post->id}}" method="POST">
          @csrf
          <div class="form-group">
            <textarea class="form-control" rows="3" name="content" ></textarea>
          </div>
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <input type="hidden" name="post_id" value="{{$post->id}}">

          <button type="submit" class="btn btn-primary" id="bncmt" >Submit</button>
        </form>
      </div>
    </div>
    @endif
  </div>
@endsection
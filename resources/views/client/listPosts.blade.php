@extends('client.layouts')
@section('content')

<div class="col-md-8">
<h1 class="my-4">Name</h1>

    @foreach($posts as $post)
        <div class="card mb-4">
            <img class="card-img-top" src="{{$post->image}}" height="300px" alt="Image">
            <div class="card-body">
            <h2 class="card-title">{{$post->title}} </h2>
                <u><small></small></u>
                <p class="card-text"> </p>
                <a href="{{route('homepage.post',[$post->id])}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
             <div class="card-footer text-muted">
                Posted on <i>{{$post->created_at}} </i> by <b><a href="{{route('homepage.userPosts',[$post->user_id])}}">{{$post ->user_id}}</a> </b>
            </div>
        </div>
    @endforeach
  </div>
@endsection
@extends('app')
@section('content')
    <h2>Chat</h2>
    @foreach($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
    @endforeach
@endsection
    
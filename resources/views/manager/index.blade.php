@extends('app')
@section('content')
    <h2>Admin Panel</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    @foreach($users as $user)
                        <h2>{{$user->username}}</h2>
                        <p>{{$user->email}}</p>
                    @endforeach
                </div>
                <div class="col-md-6">
                    @foreach($posts as $post)
                        <h2>{{$post->title}}</h2>
                        <p>{{$post->body}}</p>
                        <p>{{$post->user_id}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
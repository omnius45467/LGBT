@extends('app')
@section('content')
    
    <h2>mothership</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($posts as $post)
                    <h2>
                        {{$post->title}}
                        
                    <span>
                    {{$post->user_id}}
                    </span>
                        
                    </h2>

                    <p>
                        {{$post->body}}
                    </p>

                @endforeach
            </div>
        </div>
    </div>
    
@endsection    
@extends('app')

@section('content')
    <h1>Posts</h1>

    @foreach ($posts as $post)
        <div class="well">
            <h3>{{ $post->title }}</h3>
            <p class="lead">{{ $post->post_content }}</p>

            @foreach ($post->comments as $comment)
                <div class="panel panel-primary">{{ $comment->comment_content }}</div>
            @endforeach
        </div>
    @endforeach
@endsection

@include('css')

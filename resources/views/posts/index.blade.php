@extends('app')

@section('content')
    <h1>Posts</h1>

    <a class="btn btn-primary" href="/posts/create">New Post</a>

    @foreach ($posts as $post)
        <div class="well">
            <h3>{{ $post->title }}</h3>
            <p class="lead">{{ $post->post_content }}</p>

            @foreach ($post->comments as $comment)
                <div class="panel panel-primary">{{ $comment->comment_content }}</div>
            @endforeach

            <a class="btn btn-default" href="/posts/{{ $post->id }}">Edit post</a>
            <a class="btn btn-danger" href="/posts/{{ $post->id }}/destroy">Delete post</a>
        </div>
    @endforeach
@endsection

@include('css')

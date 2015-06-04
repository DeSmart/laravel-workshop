@extends('app')

@section('content')
    <h1>New post</h1>

    <form method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" />
        </div>
        <div class="form-group">
            <label for="post_content">Content</label>
            <br/>
            <textarea name="post_content" id="post_content" rows="15" class="form-control"></textarea>
        </div>
        <br/>
        <input type="submit" value="Save" class="btn btn-success" />
    </form>
@endsection

@include('css')

<h1>New post</h1>

<form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="title" placeholder="Title" />
    <br/>
    <textarea name="post_content" cols="100" rows="15" placeholder="Content"></textarea>
    <br/>
    <input type="submit" value="Save" />
</form>

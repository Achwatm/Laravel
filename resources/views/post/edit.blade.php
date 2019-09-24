<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<h1>Edit post</h1>
<form method="post" action="/post/{{$post->slug}}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="field">
        <label>Slug</label>
        <input type="text" class="control" name="slug" value="{{$post->slug}}">
    </div>
    <div>
        <label>Title</label>
        <input type="text" name="title" value="{{$post->title}}">
    </div>
    <div>
        <label>Body</label>
        <textarea name="body">{{$post->body}}</textarea>
    </div>
<div>
    <input type="submit" value="Edit post">
</div>
</form>
</body>
</html>

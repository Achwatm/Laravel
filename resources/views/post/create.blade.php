<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<h1>Create new post</h1>
<form method="POST" action="/post">
    {{csrf_field()}}
    <div>
        <input type="text" name="slug" placeholder="Slug">
    </div>
    <div>
        <input type="text" name="title" placeholder="title">
    </div>
    <div>
        <textarea name="body" placeholder="body"></textarea>
    </div>
<div>
    <input type="submit" value="Post">
</div>
</form>
</body>
</html>

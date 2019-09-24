<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<h1> Posts on my blog</h1>
<?php foreach($posts as $post):?>
<div style="border-bottom: 1px solid black">
    <p>{{$post->slug}}</p>
    <p>{{$post->title}}</p>
    <p>{{$post->body}}</p>

</div>

<?php endforeach;?>
</body>
</html>

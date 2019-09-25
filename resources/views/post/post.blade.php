@extends ('layout')

@section ('content')
<div><h1 class="mb-5">Your posts</h1><a href="/post/create" >Add new post</a></div>

@foreach($posts as $post)

<div class="d-flex  border p-4 flex-column mb-5">

    <div>Slug: {{$post->slug}}</div>
    <div>Title: {{$post->title}}</div>
    <div>Content: {{$post->body}}</div>
    <div class="mt-2 d-flex">
        <a class="btn btn-primary mr-5" href="{{route('post.edit',$post->slug)}}">Edit</a>
        <form method="post" action="{{route('post.delete',$post->slug)}}">
            @csrf
            @method('DELETE')
        <input type="submit" class="btn btn-primary" value="delete">
        </form>
    </div>
</div>

@endforeach
{{$posts->links()}}
@endsection

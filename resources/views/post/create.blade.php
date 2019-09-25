@extends ('layout')

@section ('content')

<form class="col-6 offset-3 mt-5" method="POST" action="/post">
    {{csrf_field()}}
    <div class="d-flex justify-content-center"><h1 class="text-black-100 font-weight-bold">Create new post</h1></div>
    <div class="form-group mb-5">
        <label class="text-black-100 font-weight-bold" for="InputSlug">Slug:</label>
        <input type="text" class="form-control" name="slug">
    </div>
    <div class="form-group mb-5">
        <label class="text-black-100 font-weight-bold" for="InputTitle">Title:</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group mb-5">
        <label class="text-black-100 font-weight-bold" for="InputBody">Content:</label>
        <textarea name="body" class="form-control"></textarea>
    </div>

    <div class="d-flex justify-content-center"><input type="submit" class=" pr-5 pl-5 btn btn-primary"  value="Add Post"></div>

</form>
@endsection

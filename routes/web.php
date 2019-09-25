<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('/contact', function () {

    return view('contact');
});

Route::get('/test', function () {

        $name = request('name');

        return view('test', [
            'name' => $name
        ]);
});
Route::get('/posts', function(){
    $posts = App\Post::orderBy('created_at','DESC')->paginate(5);
    return view('post.post', compact('posts'));
});
Route::delete('/post/{post}', 'PostController@delete')->name('post.delete');
Route::get('/post/create', 'PostController@create');
Route::patch('/post/{post}', 'PostController@update');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
Route::post('/post', 'PostController@store');





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



/*Variable en blade es con corchetes*/
/*variable name con valor carlos*/
Route::get('/prueba', function () {
    return view('child', ['name' => 'Carlos']);
});

Route::get('/blog', function () {
    return view('blog', ['name' => 'Carlos', 'surname' => 'Ponce']);
});

Route::get('/posts/{id}', function ($id) {
    return App\Post::find($id);
});
Route::get('/posts', 'PostController@index');

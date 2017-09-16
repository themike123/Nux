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

Route::get('/','WelcomeController@index');
Route::name('courses_path')->get('/courses','CourseController@index');

//Peticiones ajax
Route::get('/getCourses','CourseController@getCourses');

//Paginas de inicios
Route::name('contacts_path')->get('/contact','ContactController@index');
Route::name('store_contact_path')->post('/contacts','ContactController@store');
Route::name('abouts_path')->get('/about','WelcomeController@about');
Route::name('term_path')->get('/terms','WelcomeController@term');
Route::name('privacy_path')->get('/privacy','WelcomeController@privacy');


Auth::routes();

Route::group(['middleware'=>'auth'],function (){
    //Couses
    Route::name('store_course_path')->post('/courses','CourseController@store');
});

//Route::name('posts_path')->get('/posts','PostController@index');
//Route::name('create_post_path')->get('/posts/create','PostController@create');
//Route::name('store_post_path')->post('/posts','PostController@store');
//Route::name('post_path')->get('/posts/{post}','PostController@show');
//Route::name('edit_post_path')->get('/posts/{post}/edit','PostController@edit');
//Route::name('update_post_path')->put('/posts/{post}','PostController@update');
//Route::name('delete_post_path')->delete('/posts/{post}','PostController@destroy');

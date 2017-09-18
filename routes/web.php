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
Route::name('course_path')->get('/courses/{course}','CourseController@index');

//Peticiones ajax
Route::get('/getCourses','CourseController@getCourses');
Route::get('/getCourse/{course}','CourseController@getCourse');

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

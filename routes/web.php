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

Route::get('/','PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::resource('tickets','TicketsController');
Route::post('/comment', 'CommentsController@newComment')->name('comment');
// Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
// Route::post('users/register', 'Auth\RegisterController@register');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::group(array(
    'prefix'=>'admin','namespace'=>'Admin','middleware'=>'manager'),function(){
        Route::get('users','UsersController@index');
        Route::get('roles', 'RolesController@index');
        Route::get('roles/create', 'RolesController@create');
        Route::post('roles/create', 'RolesController@store');
        Route::get('users/{id?}/edit', 'UsersController@edit')->name('users_edit');
        Route::post('users/{id?}/edit','UsersController@update');
        Route::get('/', 'PagesController@home');
        Route::get('posts', 'PostsController@index')->name('posts');
        Route::get('posts/create', 'PostsController@create');
        Route::post('posts/create', 'PostsController@store');
        Route::get('posts/{id?}/edit', 'PostsController@edit');
        Route::post('posts/{id?}/edit','PostsController@update');
        Route::get('categories', 'CategoriesController@index');
        Route::get('categories/create', 'CategoriesController@create');
        Route::post('categories/create', 'CategoriesController@store');
    });
Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id?}', 'BlogController@show');
Route::get('/home', 'HomeController@index')->name('home');
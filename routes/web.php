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

use App\User;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}',['as'=>'home.post','uses'=>'AdminPostController@post'] );


Route::group(['middleware' => 'admin','as' => 'admin.'], function () {

    Route::resource('admin/users', 'AdminController');

    Route::resource('admin/posts', 'AdminPostController');

    Route::resource('admin/comments', 'PostCommentsController');

    Route::resource('admin/replies', 'PostRepliesController');
    
});

Route::group(['middleware' => 'auth'],function(){

    Route::post('/replies', ['as'=>'comment.replies','uses'=>'PostRepliesController@createReplies']);

});

// Route::get('/role',function(){

//     $user = User::findOrfail(1);
//     return $user->role;
    
// });
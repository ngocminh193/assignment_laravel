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

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;



Route::group([
    'prefix' => 'admin',
    'middleware' => 'check_auth',
], function () {
    Route::get('/', 'DashBoardController@index')->name('admin')->middleware(['check_role_admin',]);
    // user
    Route::resource('users', 'UserController')->middleware(['check_role_admin',]);
    Route::get('users/delete/{id}','UserController@destroy')->middleware(['check_role_admin',])->name('user.delete');// tạo route xóa
    Route::resource('categories', 'CategoryController')->middleware(['check_role_admin',]);
    // post
    Route::resource('posts','PostController')->middleware(['check_role_admin',]);
    Route::get('posts/delete/{id}','PostController@destroy')->middleware(['check_role_admin',])->name('post.delete');// tạo route xóa
    Route::resource('comments','CommentController')->middleware(['check_role_admin',]);
    //xoa category
    Route::get('categories/delete/{id}','CategoryController@destroy')->middleware(['check_role_admin',])->name('category.delete');// tạo route xóa
    //xoa comment
    Route::get('comments/delete/{id}','CommentController@destroy')->middleware(['check_role_admin',])->name('comment.delete');// tạo route xóa

});

// Auth Admin

Route::group([
    'prefix' => 'admin',
], function(){
    Route::get('login', 'AuthController@getLoginForm');
    Route::post('login', 'AuthController@login')->name('auth.login');
    Route::get('logout','AuthController@logout')->name('auth.logout');
});

// End Auth Admin

// Auth Client
Route::get('/',             'HomeController@index')->name('homepage.index');
Route::get('/category/{id}','HomeController@getCategory')->name('homepage.listPost');
Route::get('/post/{id}',    'HomeController@getPost')->name('homepage.post');
Route::post('post',         'HomeController@comment')->name('comment');
Route::get('login',         'HomeController@getLoginForm');
Route::post('login',        'HomeController@login')->name('homepage.login');
Route::get('logout',        'HomeController@logout')->name('homepage.logout');
Route::get('register',      'HomeController@getRegisterForm');
Route::post('register',     'HomeController@register')->name('register');
Route::get('user/post/{id}','HomeController@getUserPost')->name('homepage.userPosts');
Route::get('profile/{id}',  'HomeController@showProfile')->name('homepage.showProfile');
Route::post('profile',      'HomeController@updateProfile')->name('homepage.updateProfile');

// End Auth Client







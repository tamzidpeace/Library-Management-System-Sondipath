<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::get('/admin/dashboard', 'AdminController@login')->name('dashboard');

//user routes
Route::get('/admin/users', 'AdminController@users')->name('admin.users');
Route::get('/admin/users/edit-user/{id}', 'AdminController@editUser')->name('admin.edit-user');
Route::post('/admin/users/edit-user-confirm', 'AdminController@editUserConfirm')->name('admin.edit-user-confirm');
Route::get('/admin/users/delete-user/{id}', 'Admincontroller@deleteUser')->name('admin.delete-user');
Route::post('/admin/users/delete-user-confirm', 'AdminController@deleteUserConfirm')->name('admin.delete-user-confirm');

//category routes
Route::get('/admin/category/index', 'AdminCategoryController@index')->name('admin.category.index');
Route::get('/admin/category/add', 'AdminCategoryController@add')->name('admin.category.add');
Route::post('/admin/category/save', 'AdminCategoryController@save')->name('admin.category.save');
Route::get('/admin/category/edit/{id}', 'AdminCategoryController@edit')->name('admin.category.edit');
Route::post('/admin/category/edit-confirm', 'AdminCategoryController@editConfirm')->name('admin.category.edit-confirm');
Route::get('/admin/category/delete/{id}', 'AdminCategoryController@delete')->name('admin.category.delete');
Route::post('/admin/category/delete-confirm', 'AdminCategoryController@deleteConfirm')->name('admin.category.delete');

//author routes
Route::get('/admin/author/index', 'AdminAuthorController@index')->name('admin.author.index');
Route::get('/admin/author/add', 'AdminAuthorController@add')->name('admin.author.add');
Route::post('/admin/author/save', 'AdminAuthorController@save')->name('admin.author.save');
Route::get('/admin/author/edit/{id}', 'AdminAuthorController@edit')->name('admin.author.edit');
Route::post('admin/author/edit-confirm', 'AdminAuthorController@editConfirm')->name('admin.author.edit-confirm');
Route::get('/admin/author/delete/{id}', 'AdminAuthorController@delete')->name('admin.author.delete');
Route::post('/admin/author/delete-confirm', 'AdminAuthorController@deleteConfirm')->name('admin.author.delete-confirm');


//book routes
Route::get('/admin/book/index', 'AdminBookController@index')->name('admin.book.index');
Route::get('/admin/book/add', 'AdminBookController@add')->name('admin.book.add');

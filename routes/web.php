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

//category route

Route::get('/admin/category/index', 'AdminCategoryController@index')->name('admin.category.index');
Route::get('/admin/category/add', 'AdminCategoryController@add')->name('admin.category.add');
Route::post('/admin/category/save', 'AdminCategoryController@save')->name('admin.category.save');

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

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::get('/admin/dashboard', 'AdminController@login')->name('dashboard');

//user routes
Route::get('/admin/users', 'AdminController@users')->name('admin.users');
Route::get('/admin/users/edit-user/{id}', 'AdminController@editUser')->name('admin.edit-user')
        ->middleware('admin');
Route::post('/admin/users/edit-user-confirm', 'AdminController@editUserConfirm')
        ->name('admin.edit-user-confirm')->middleware('admin');
Route::get('/admin/users/delete-user/{id}', 'Admincontroller@deleteUser')->name('admin.delete-user')
        ->middleware('admin');;
Route::post('/admin/users/delete-user-confirm', 'AdminController@deleteUserConfirm')
        ->name('admin.delete-user-confirm')->middleware('admin');

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
Route::get('/admin/book/create', 'AdminBookController@create')->name('admin.book.create');
Route::post('/admin/book/save', 'AdminBookController@save')->name('admin.book.save');
Route::get('/admin/book/edit/{id}', 'AdminBookController@edit')->name('admin.book.edit');
Route::post('/admin/book/edit-confirm', 'AdminBookController@editConfirm')->name('admin.book.edit-confirm');
Route::get('/admin/book/delete/{id}', 'AdminBookController@delete')->name('amdin.book.delete');
Route::post('/admin/book/delete-confirm', 'AdminBookController@deleteConfirm')->name('amdin.book.delete-confirm');
Route::get('/admin/book/info/{id}', 'AdminBookController@info')->name('admin.book.info');
Route::get('/admin/book/search', 'AdminBookController@search')->name('admin.book.search');

//consignment item
Route::get('/admin/book/consignment', 'ConsignmentController@index')->name('admin.book.consignment');
Route::get('/admin/book/consignment/create', 'ConsignmentController@create')->name('admin.consignment.create');
Route::post('admin/book/consignment/calculate', 'ConsignmentController@calculate')->name('admin.consignment.calculate');
Route::get('/admin/consignment/all', 'ConsignmentController@index2')->name('admin.consignment.all_con');
Route::get('/admin/consignment/single/{id}', 'ConsignmentController@singleCon')->name('admin.consignment.single');

//sales
Route::get('/admin/sale/info', 'AdminSaleController@info')->name('admin.sale.info');
Route::get('/admin/sale/info-set', 'AdminSaleController@infoSet')->name('admin.sale.info_set');
Route::post('/admin/sale/calculate', 'AdminSaleController@calculate')->name('admin.sale.calculate');
Route::post('/admin/sale/save', 'AdminSaleController@save')->name('admin.sale.save');
Route::get('/admin/sale/index', 'AdminSaleController@index')->name('admin.sale.index');
Route::get('/admin/sale/report', 'AdminSaleController@report')->name('admin.sale.report');
Route::get('/admin/sale/report/isbn', 'AdminSaleController@reportByISBN')->name('admin.sale.report.isbn');
Route::get('/admin/sale/report/date', 'AdminSaleController@reportByDate')->name('admin.sale.report.date');
Route::get('/admin/sale/report/date-between', 'AdminSaleController@dateBetween')->name('admin.sale.report.date-between');
Route::get('download_pdf', 'AdminSaleController@downloadPDF')->name('download.pdf');




<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/new-topic', function () {
    return view('client.new-topic');
});
Route::get('/c-overview', function () {
    return view('client.category-overview');
});
Route::get('/topic', function () {
    return view('client.topic');
});

route::get('dashboard/home', 'App\Http\Controllers\DashboardController@home');

Route::get('dashboard/category/new', 'App\Http\Controllers\CategoryController@create')->name('category.new');
Route::post('dashboard/category/new', 'App\Http\Controllers\CategoryController@store')->name('category.store');
Route::get('dashboard/categories', 'App\Http\Controllers\CategoryController@index')->name('categories');
Route::get('dashboard/categories/{id}', 'App\Http\Controllers\CategoryController@show')->name('category');

// CRUD
Route::get('dashboard/categories/edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');
Route::post('dashboard/categories/edit/{id}', 'App\Http\Controllers\CategoryController@update')->name('category.update');
Route::get('dashboard/categories/delete/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('category.destroy');
// Forum
Route::get('dashboard/forum/new', 'App\Http\Controllers\ForumController@create')->name('forum.new');
Route::post('dashboard/forum/new', 'App\Http\Controllers\ForumController@store')->name('forum.store');
Route::get('dashboard/forums', 'App\Http\Controllers\ForumController@index')->name('forums');

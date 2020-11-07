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
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    //Main Page with IndexController
    Route::get('/', 'IndexController@index');

    //Route Post
    Route::view('post', 'front.post');
    Route::get('post/{slug}', 'PostController@show')->name('post.show');

    //Static Views
    Route::view('about', 'front.about');
    Route::view('contact', 'front.contact');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

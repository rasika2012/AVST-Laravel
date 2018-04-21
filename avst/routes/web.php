<?php
use App\Http\Controllers\ImagController;

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

//get all images here
Route::get('/allimges', 'ImagesController@returnAll')->name('home');
//add new image
Route::POST('/add','ImagesController@ImageAdd');
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

Route::get('/allimges', 'ImagesController@returnAll')->name('All Images');
Route::get('/addnew', function () {
    return view('uploadimg');
});//deleteImage
Route::get('/delete/{id}','ImagesController@deleteImage');


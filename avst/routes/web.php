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

//Route::get('/', function () {
//    return view('welcome');
//
//});
Route::get('/', 'NewsController@getNews')->name('welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//get all images hereaddnew
Route::get('/allimges', 'ImagesController@returnAll')->name('All Images');
Route::get('/addnew', function () {
    return view('uploadimg');
});//deleteImage
Route::get('/delete/{id}','ImagesController@deleteImage');

Route::get('/deleteUnit/{id}','UnitsController@deleteUnit');

Route::get('/locations', function () {
    return view('Locations');
});
Route::get('/settings', function () {
    return view('Settings');
});
Route::get('/addNews','NewsController@setNews');

//Hamth
Route::get('/addunit', function () {
    return view('addUnit');
});
Route::get('/location/{id}','UnitsController@getLocation');
Route::get('/getAllUnits' , 'UnitsController@getAllUnit');
Route::post('/addNewUnit',['uses'=>'UnitsController@addUnit']);

Route::get('/deleteNews/{id}','NewsController@deleteNews');
Route::get('locationimage/','ImagesController@getLocation');

Route::POST('/add1',[
    'uses'=>'ImagesController@ImageAdd1'
]);
Route::get('/test', function () {
    return view('test');
});


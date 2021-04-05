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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/service-list', 'App\Http\Controllers\WebController@servicelist');
Route::get('/post/{category_url}/{Service_url}/{url}', 'App\Http\Controllers\WebController@rwpost');
Route::get('/post/{category_url}/{Service_url}', 'App\Http\Controllers\WebController@rwpostservice');
Route::get('/post/{category_url}', 'App\Http\Controllers\WebController@rwpostcategory');
Route::get('/post', 'App\Http\Controllers\WebController@rwposts');
Route::post('/lead-form', 'App\Http\Controllers\WebController@leadfrom');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/{url?}/{city?}', 'App\Http\Controllers\WebController@index');

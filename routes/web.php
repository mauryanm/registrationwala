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
############# Other pages ###############
Route::get('/privacy-policy', 'App\Http\Controllers\PageController@pages');

############ End Other Pages ############
Route::get('/'.__('voyager::post.post_slug').'{category_url}/{Service_url}/{url}', 'App\Http\Controllers\WebController@rwpost');
Route::get('/'.__('voyager::post.post_slug').'{category_url}/{Service_url}', 'App\Http\Controllers\WebController@rwpostservice');
Route::get('/'.__('voyager::post.post_slug').'{category_url}', 'App\Http\Controllers\WebController@rwpostcategory');
Route::get('/'.__('voyager::post.post_slug'), 'App\Http\Controllers\WebController@rwposts');
Route::post('/lead-form', 'App\Http\Controllers\WebController@leadfrom');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
###################### Other service pages ##########


Route::get('/copyright-registration/{url?}/{city?}', 'App\Http\Controllers\WebController@index');
Route::get('/{url?}/{city?}', 'App\Http\Controllers\WebController@index');

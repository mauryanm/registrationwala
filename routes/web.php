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

Route::get('auth/facebook', 'App\Http\Controllers\Auth\SiteUserController@redirectToFB')->name('facebook');
Route::get('facebook/callback', 'App\Http\Controllers\Auth\SiteUserController@handleCallback');
Route::get('auth/google', 'App\Http\Controllers\Auth\SiteUserController@redirectToGoogle')->name('google');
Route::get('google/callback', 'App\Http\Controllers\Auth\SiteUserController@handleGoogleCallback');
Route::get('/become-an-associate', 'App\Http\Controllers\becomeAnAssociateController@index');
Route::prefix('dashboard')
        ->as('dashboard.')
        ->group(function() {
        Route::get('/', 'App\Http\Controllers\SiteUserController@index')->name('dashboard');
Route::namespace('')
        ->group(function() {
        Route::get('login', 'App\Http\Controllers\Auth\SiteUserController@showLoginForm')->name('login');
        Route::post('login', 'App\Http\Controllers\Auth\SiteUserController@login')->name('login');
        Route::post('logout', 'App\Http\Controllers\Auth\SiteUserController@logout')->name('logout');
        Route::get('logout', 'App\Http\Controllers\Auth\SiteUserController@logout')->name('logout');
        Route::get('register', 'App\Http\Controllers\Auth\SiteUserController@registration')->name('register');
        Route::post('register', 'App\Http\Controllers\Auth\SiteUserController@registeruser')->name('register');
        Route::put('updateuser/{id}', 'App\Http\Controllers\SiteUserController@update')->name('updateuser');
        Route::group(['middleware' => 'checkusertype'], function () {
        Route::get('/service-request', 'App\Http\Controllers\SiteUserController@servicerequest')->name('service-request');
        Route::get('/pay-now', 'App\Http\Controllers\SiteUserController@paynow')->name('pay-now');
        Route::get('/payment-history', 'App\Http\Controllers\SiteUserController@paymenthistory')->name('payment-history');
        Route::get('/create-ticket', 'App\Http\Controllers\SiteUserController@ticket')->name('create-ticket');
        Route::post('/create-ticket', 'App\Http\Controllers\SiteUserController@storeticket')->name('create-ticket');
        });
        Route::get('/associate', 'App\Http\Controllers\SiteUserController@associate')->name('associate');
        });
 });


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('/');
Route::get('/download/{path}', 'App\Http\Controllers\Controller@download');
Route::get('/search-service', 'App\Http\Controllers\HomeController@searchservice');
Route::get('/service-list', 'App\Http\Controllers\WebController@servicelist');
############# Other pages ###############
Route::get('/privacy-policy', 'App\Http\Controllers\PageController@index')->name('privacy-policy');
Route::get('/about-us', 'App\Http\Controllers\PageController@index')->name('about-us');
Route::get('/refund-policy', 'App\Http\Controllers\PageController@index')->name('refund-policy');
Route::get('/cancellation', 'App\Http\Controllers\PageController@index')->name('cancellation');
Route::get('/terms-condition', 'App\Http\Controllers\PageController@index')->name('terms-condition');
Route::get('/our-coupon-partner', 'App\Http\Controllers\PageController@index')->name('our-coupon-partner');
Route::get('/videos', 'App\Http\Controllers\PageController@videos')->name('videos');
Route::get("/contact-us", function(){return view("contactus");});
Route::get('/our-coupon-partner', 'App\Http\Controllers\PageController@couponpartner')->name('our-coupon-partner');
############ End Other Pages ############

############ E-Book URL ############
Route::get('/e-books', 'App\Http\Controllers\EbookController@index')->name('e-books');
Route::post('/e-books', 'App\Http\Controllers\EbookController@ebookdownload')->name('e-books');

############ Legal Document URL ############
Route::post('/legal-doc-download', 'App\Http\Controllers\LegalDocumentsController@docdownload')->name('doc-download');
Route::get('/legal-docs/{url}/edit', 'App\Http\Controllers\LegalDocumentsController@docedit');
Route::get('/legal-docs/{url}', 'App\Http\Controllers\LegalDocumentsController@docpages');
Route::get('/legal-docs', 'App\Http\Controllers\LegalDocumentsController@index');

############ Blog Pages ############
Route::get('/search-post', 'App\Http\Controllers\WebController@searchPost');
Route::get('/'.__('voyager::post.post_slug').'{category_url}/{Service_url}/{url}', 'App\Http\Controllers\WebController@rwpost');
Route::get('/'.__('voyager::post.post_slug').'{category_url}/{Service_url}', 'App\Http\Controllers\WebController@rwpostservice');
Route::get('/'.__('voyager::post.post_slug').'{category_url}', 'App\Http\Controllers\WebController@rwpostcategory');
Route::get('/'.__('voyager::post.post_slug'), 'App\Http\Controllers\WebController@rwposts');
// Route::post('/lead-form', 'App\Http\Controllers\WebController@leadfrom');
Route::post('/lead-form', 'App\Http\Controllers\MailController@sendleadmail');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
###################### Other service pages ##########


Route::get('/copyright-registration/{url}/{city?}', 'App\Http\Controllers\WebController@index');
Route::get('/company-search/{city?}', 'App\Http\Controllers\WebController@searchcompany')->name('company-search');
Route::get('/{url?}/{city?}', 'App\Http\Controllers\WebController@index');

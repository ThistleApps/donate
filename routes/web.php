<?php

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

use App\Church;
use App\Paymentpage;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hash', function () {
    return view('churches.hash');
});

//Route::get('/hash', 'ChurchController@hash')->name('hash');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::name('churchlist')->resource('/churchlist', 'ChurchController');
Route::get('churchprofile/{id}', 'ChurchController@show')->name('profile');
Route::get('churchpay/{id}', 'ChurchController@PostFDMSdata')->name('donate');

Route::get('/church/{id}/paypage', function ($id){

    return Church::find($id)->Paymentpage;

});

Route::get('/paypage/{id}/church', function ($id){

    return Paymentpage::find($id)->Church->church_name;

});

//Route::resource('/churchlist', 'ChurchController')->name('churchlist');

//Route::get('/churchprofile/{id}', 'ChurchController@show')->name('churchprofile');

/*Route::get('/', function () {
    $posts = App\Post::all();
    return view('home', compact('posts'));
});*/

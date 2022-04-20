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
/* Auth::routes();
Auth::routes([
    'register' => false, 
    'reset' => false, 
    'verify' => false, 
  ]); */
  
Route::resource('manufacturer','ManufacturerController');  
Route::resource('model','CarModelController');  
Route::resource('slider','SliderController');

Route::get('/', 'ManufacturerController@index');

Route::get('/faq', function () {
    return view('site.faq');
});

Route::get('/m', function () {
    return view('site.manufacturer');
});
Route::get('/about', function () {
    return view('site.about2');
});
Route::get('/car', function () {
    return view('site.car_model');
});
Route::get('/test_drive', function () {
    return view('site.test_drive');
});
Route::get('/service', function () {
    return view('site.service');
});

Route::get('/contact', "ContactMessageController@create");
Route::post('Kovcar-Contact', [
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store.main'
]);
Route::post('Kovcar-Contact_testDrive', [
    'uses' => 'ContactMessageController@test_drive',
    'as' => 'test.drive'
]);
Route::post('Kovcar-Contact_service', [
    'uses' => 'ContactMessageController@service',
    'as' => 'service'
]);
Route::get('/home/get/{token}', 'HomeController@backToBack')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/hotels', 'HotelsController@showAllHotels')->name('get_request');
Route::get('/places', 'PlaceController@showAllPlaces')->name('get_request_places');
Route::get('/restaurants', function(){
	return view('restaurants');
			})->name('get_request_restaurants');



Route::post('/hotels', 'HotelsController@searchHotels')->name('post_request');
Route::post('/places', 'PlaceController@searchPlaces')->name('post_request_places');
Route::post('/restaurants', 'RestaurantController@searchPlaces')->name('post_request_restaurants');



Route::get('/hotels/{hotel}', 'HotelsController@showSingleHotel');
Route::get('/places/{place}', 'PlaceController@showSinglePlace');
Route::get('/places/{place}', 'PlaceController@showSinglePlace');




Route::get('/profile', function () {
    return view('profile');
});

Route::get('/', 'HomeController@home');


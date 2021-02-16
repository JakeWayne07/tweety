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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/linkStorage', function () {
    Artisan::call('storage:link');
});

Route::middleware('auth')->group(function (){
    Route::post('/tweets', 'TweetController@store');
    Route::get('/tweets', 'TweetController@index')->name('home');
});

Route::get('/cursor', function(){
    return view('cursor');
});
Route::get('/paget', function(){
    return view('pageT');
});
Route::get('/test', function(){
    return view('testnav');
});
Route::get('/slow', function(){
    return view('myslow');
});
Route::get('/explore', 'ExploreController');

Route::get('profile/{user:username}', 'ProfileController@show')->name('profile');
Route::post('profile/{user:username}/follow', 'FollowController@store');
Route::patch('profile/{user:username}/edit', 'ProfileController@update')->middleware('can:edit,user');
Route::get('profile/{user:username}/edit', 'ProfileController@edit')->middleware('can:edit,user'); //first layer of authentication


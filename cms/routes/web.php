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

Route::get('home','HomeController@showWelcome');

Route::get('about', 'AboutController@showDetails');

//Route::get('about', function (){
//    return('about content');
//});
Route::get('about/direction', function (){
    return('about direction');
});

Route::any('submit-form', function (){
    return 'Process Form';
});

//Route::get('about/{theSubject}', function ($theSubject){
//    return $theSubject.' content here';
//});

Route::get('about/{theSubject}', 'AboutController@showSubject');

Route::get('about/{price}/{art}', function ($price, $art){
   return $price.' '. $art.' hello';
});
Route::get('where', function (){
    return \Illuminate\Support\Facades\Redirect::to('about');
});


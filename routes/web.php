<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;


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

/* Route::get('/', function () {
    return view('index');
}); */
Route::get('/home',[HomepageController::class,'showhome']);

    
Route::post('searchbook',[BookController::class,'Searchbook']);

Route::view('signup',[SignupController::class,'Signup']);

Route::post('adddata',[ProfileController::class,'adddata']);

Route::post('getdata',[ProfileController::class,'getdata']);

Route::post('addreview',[ReviewController::class,'addreview']);

Route::post('addbook',[BookController::class,'Addbook']);

Route::post('searchreview',[ReviewController::class,'Searchreview']);

Route::view('offer','offer');

Route::view('error','error');

Route::view('profile','profile');

Route::view('Book_All_The_Light','Book_All_The_Light');

Route::view('biochar','biochar');

Route::view('sonicboom','sonicboom');
Route::view('greatgatsby','greatgatsby');
Route::view('missingpiece','missingpiece');
Route::view('mongolia','mongolia');
Route::view('biochar','biochar');
Route::view('wool','wool');
Route::view('return','return');
Route::view('bookthief','bookthief');
Route::view('littlefires','english');
Route::view('girlontrain','girlontrain');
Route::view('moneytree','moneytree');
Route::view('hazelwood','hazelwood');
Route::view('king','king');


Route::view('contact','contact');

Route::view('service','service');

Route::view('gview','gview');




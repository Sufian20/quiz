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


Auth::routes();



Route::get('/', 'FrontendController@StudentInfo')->name('frontpage');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/add-que', 'QueController@AddQue')->name('AddQue');
});
//Route::post('/post-info', 'UserIfoController@PostInof')->name('PostInof');

Route::get('/anser', 'AnserController@Ans')->name('Ans');
Route::post('/post-anser', 'AnserController@PostAns')->name('PostAns');
Route::get('/view-ans', 'AnserController@ViewAns')->name('ViewAns');
Route::get('/indu-ans', 'AnserController@InduAns')->name('InduAns');

//Route::get('/home', 'HomeController@index')->name('home');

//Add- Question
Route::get('/add-que', 'QueController@AddQue')->name('AddQue');
Route::post('/post-que', 'QueController@PostQue')->name('PostQue');
Route::get('/view-que', 'QueController@ViewtQue')->name('ViewtQue');
Route::get('/delete-que/{que_id}', 'QueController@DeleteQue')->name('DeleteQue');
Route::get('/edit-que/{que_id}', 'QueController@EditQue')->name('EditQue');
Route::post('/update-que', 'QueController@UpdatetQue')->name('UpdatetQue');

///==== Uniq Uses for test ============================
Route::get('/view-user_result', 'AnserController@UserResult')->name('UserResult');
Route::get('/view-detail_result', 'AnserController@ViewDetailsRe')->name('ViewDetailsRe');



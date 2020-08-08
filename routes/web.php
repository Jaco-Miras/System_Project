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


Auth::routes();
//Login Auth
Route::get('/', 'facadesController@index')->middleware('auth');
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/login');
});

//participants
Route::get('/members', 'participantController@index');
Route::get('/members2', 'participantController@create');
Route::post('members2', 'participantController@store');
Route::get('/members2/{participant}', 'participantController@show');
Route::patch('/members2/{participant}', 'participantController@update');
// Route::get('/deleteMember/{participant}', 'participantController@destroy');
// Route::post('/members','participantController@store');
// Route::post('/members','participantController@store');

//Event
Route::get('/event', 'eventController@index');
Route::get('/event2', 'eventController@create');
Route::post('event2', 'eventController@store');
Route::get('/event2/{event}', 'eventController@show');
// Route::get('/event2/{event}', function(){
//     dd('hello');
// });
Route::patch('/event2/{event}', 'eventController@update');
Route::get('/event2/{event}/participant', 'eventController@participant');
// Route::GET('/delete/{id}', 'EventController@delete')->name('event.delete');

//Department
// Route::get('/department', 'departmentController@index');
// Route::get('/department2','departmentController@create');   
// Route::post('/department2', 'departmentController@store');   
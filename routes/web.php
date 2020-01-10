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


Route::get('/', 'testing@index')->name('index');
Route::get('/addcase', 'testing@addcase')->name('addcase');
Route::get('/addofficer', 'testing@addofficer')->name('addofficer');
Route::get('/caseofficer', 'testing@caseofficer')->name('caseofficer');
Route::post('/caseofficer', 'testing@CaseOfficerformValidationPost');
//caseofficercerformValidationPost	
// Route::get("/",'testing@index'); 
// Route::post("store",'testing@store'); 
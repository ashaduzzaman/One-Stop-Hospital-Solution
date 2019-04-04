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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('doctors','DoctorsController');
Route::resource('patients','PatientsController');
Route::resource('tests','TestController');
Route::resource('medicines','MedicineController');
Route::get('prescriptions/{patient}','PrescriptionController@index');
Route::post('prescriptions/test','PrescriptionController@test');



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

Route::get('/', 'SiteController@loginForm')->name('login');
Route::post('/login', 'SiteController@login');
Route::get('/logout', 'SiteController@logout');
Route::get('/dashboard', 'SiteController@dash');

Route::group(['middleware'=>'auth'], function(){
    Route::resource('patients','PatientController');
    Route::post('/patients/search', 'PatientController@search');

    Route::get('/labtests/create/{patient}', 'LabTestController@create');
    Route::get('/labtests/{labtest}', 'LabTestController@show');
    Route::get('/labtests', 'LabTestController@index');
    Route::post('/labtests', 'LabTestController@store');

    Route::patch('/profile/{user}', 'UserController@update');
    Route::get('/profile/{user}', 'UserController@show');
    Route::get('/profile/edit/{user}', 'UserController@edit');
    Route::get('/profile/change-password/{user}', 'UserController@changePasswordForm');
    Route::patch('/profile/change-password/{user}', 'UserController@changePassword');

});

Route::middleware(['auth', 'medtech'])->group(function(){
    Route::get('templates', 'TemplateController@index');
    Route::get('templates/create', 'TemplateController@create');
    Route::post('templates', 'TemplateController@store');
    Route::post('templates/add-item', 'TemplateController@addItem');
    Route::post('templates/update-item', 'TemplateController@updateItem');
    Route::get('templates/{template}', 'TemplateController@show');
    Route::put('templates/{template}', 'TemplateController@update');

    Route::patch('/labtests/{labtest}', 'LabTestController@updateResults');
    Route::get('/labtests/edit-results/{labtest}', 'LabTestController@editResults');
});

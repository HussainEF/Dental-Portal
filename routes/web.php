<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CaseController;
use app\Http\Controllers\PatientController;
use app\Http\Controllers\LoyalityController;
use app\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
    return view('login');
});
Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('/admin', function () {
    return view('admin');
});

//Route For Login Authentication
Route::get('post-login', 'AuthController@authenticate');

//Route For Logout
Route::get('logout', function(){
    Session::flush();
    Auth::logout();
    return redirect('login');
});
//Grouping route and Apply Auth Middleware to ensure only Authurized User Can access these routes...
Route::group(['middleware' => 'auth'], function () {
    // Routes For Cases
    Route::post('/case-save', 'CaseController@caseSave');
    // Route::post('/case-save', function(){
    //     return view('welcome');
    // });

    Route::get('case-add', 'CaseController@caseAdd');
    Route::get('dashboard', 'CaseController@casesDashboard');

    // Routes for Patients 
    Route::get('patient-list', 'PatientController@patientList');
    Route::get('patient-case-details', 'PatientController@patientCaseDetails');
    Route::get('view-patient-progress', 'PatientController@patientProgress');

    //Routes for Loyality Points 
    Route::get('loyality-list', 'LoyalityController@loyalityList');
    Route::get('loyality-points-avail-request', 'LoyalityController@loyalityPointsAvailRequest');
    Route::get('loyality-notifications', 'LoyalityController@loyalityNotification');
});
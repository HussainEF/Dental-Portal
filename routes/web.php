<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\CaseController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\LoyalityController;
use App\Http\Controllers\AuthController;

use App\Models\MedicalPrimaryCases;
use App\Models\MedicalCasesPictures;

use Illuminate\Support\Facades\App;


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

Route::get('forgot-password', function () {
    return view('forgot_password');
})->name('forgot-password');

Route::get('/admin', function () {
    return view('admin');
});

//Route For Login Authentication
Route::get('post-login', [AuthController::class, 'authenticate']);

//Route For Logout
Route::get('logout', function(){
    Session::flush();
    Auth::logout();
    return redirect('login');
});

//Grouping route and Apply Auth Middleware to ensure only Authurized User Can access these routes...
// Route::post('/oral-pictures-upload', [CaseController::class, 'uploadPictures'])->name('oral-pictures-upload');

Route::group(['middleware' => 'auth'], function () {
    // Routes For Case Detail
    Route::get('/case-detail/{caseId}', [CaseController::class, 'caseDetail'])->name('case-detail');
    Route::get('consent-pdf', function(){
        $data = session('data');
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('livewire.case-detail.component.conscent-form', ['data' => $data]);
        return $pdf->stream(); 
    })->name('consent-pdf');
    
    Route::get('/upload-photos/{caseId}', function(){
        return view('cases.upload_photos');
    })->name('upload-photos');

    //Route for Case Add
    Route::get('case-add', [CaseController::class, 'caseAdd']);

    //Route For for change default password.
    Route::get('change-password', [AuthController::class, 'changePassword']);

    //Route for Dashboard View
    Route::get('dashboard', [CaseController::class, 'casesDashboard'])->name('dashboard');

    // Routes for Patients 
    Route::get('patient-list', [PatientController::class,'patientList']);
    Route::get('patient-case-details', [PatientController::class,'patientCaseDetails']);
    Route::get('view-patient-progress', [PatientController::class,'patientProgress']);

    //Routes for Loyality Points 
    Route::get('loyality/{value}', [LoyalityController::class, 'loyality'])->name('loyality');
});
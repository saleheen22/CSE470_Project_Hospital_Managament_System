<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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



Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

 

});
Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);
Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/index', [HomeController::class, 'index']);

Route::get('/approved/{id}', [AdminController::class, 'approved']);
Route::get('/showappointment', [AdminController::class, 'showappointment']);
Route::get('/cancelled/{id}', [AdminController::class, 'cancelled']);
Route::get('/updateappointment/{id}', [HomeController::class, 'updateappointment']);

Route::post('/edituser/{id}', [HomeController::class, 'edituser']);

Route::get('/report', [AdminController::class, 'report']);
Route::post('/rupload', [AdminController::class, 'rupload']);

Route::get('/addreport/{id}', [AdminController::class, 'addreport']);

Route::get('/showreport', [HomeController::class, 'showreport']);
Route::get('/download/{file}', [HomeController::class, 'download']);
Route::get('/cancelappointment/{id}', [HomeController::class, 'cancelappointment']);
Route::get('complain/', [HomeController::class, 'complain']);
Route::post('/add_complain', [HomeController::class, 'adcomplain']);
Route::get('/add_cabin_view', [AdminController::class, 'addcabin']);
Route::post('/add_cabin', [AdminController::class, 'add_cabin']);

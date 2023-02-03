<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\FullCalendarController;
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
//Home page

Route::get('/', [ManagementController::class, 'index']);

//Login User

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest'); 

Route::get('/register', [UserController::class, 'register'])->middleware('guest');

Route::get('users/{user}/edit', [UserController::class, 'edit'])->middleware('auth');

Route::put('users/{user}', [UserController::class, 'update']);

Route::post('/users', [UserController::class,'store']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::post('logout', [UserController::class, 'logout']);

//For Documents Request
Route::post('/documents/save', [DocumentsController::class, 'sendRequest']);

Route::post('/documents/update', [DocumentsController::class, 'documentUpdate']);

Route::delete('/documents/{documents}',[DocumentsController::class, 'destroy']);

Route::get('/documents/approved', [DocumentsController::class, 'documentApproved']);

Route::get('/documents/firebase/{document_id}', [DocumentsController::class, 'documentFirebase']);

Route::get('/documents', [ManagementController::class, 'request'])->middleware('auth');

Route::get('/manage', [DocumentsController::class, 'manage'])->middleware('auth');

Route::delete('/cancel/{documents}', [DocumentsController::class, 'cancelRequest']);

//For Setting Appointment
Route::get('full-calender', [FullCalendarController::class, 'index'])->middleware('auth');

Route::post('full-calender/action', [FullCalendarController::class, 'action']);

//Admin Panel
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth','isAdmin'])/* ->middleware('guest') */;

/* Route::post('/logout', [AdminController::class, 'adminLogout']); */

//Google Login

Route::get('auth/google', [UserController::class, 'redirect'])->name('google-auth');

/* Route::post('auth/google/call-back', [UserController::class, 'store']); */

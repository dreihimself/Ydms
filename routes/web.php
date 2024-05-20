<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RouteController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return inertia('MainLayout');
// });

// Route::get('/usersettings', function () {
//     return inertia('usersettings');
// });

// Route::get('/settings', function () {
//     return inertia('settings');
// });

Route::get('/', [RouteController::class, 'index']);
Route::get('/home', [RouteController::class, 'home']);
Route::get('/profiles', [RouteController::class, 'profiles']);
Route::get('/preference', [RouteController::class, 'preference']);
Route::get('/DropdownSettings', [RouteController::class, 'Dropdownsettings']);
Route::get('/login', [RouteController::class, 'login']);
Route::get('/SkOfficials', [RouteController::class, 'skofficials']);
Route::get('/usersettings', [UserController::class, 'usersettings']);
Route::post('/usersettings', [UserController::class, 'usersettings']);
Route::get('/barangayregistry', [RouteController::class, 'barangayregistry']);
Route::get('/departmenthead', [RouteController::class, 'departmenthead']);
Route::get('/civilstatus', [RouteController::class, 'civilstatus']);
Route::get('/program', [RouteController::class, 'program']);
Route::get('/educationalbackground', [RouteController::class, 'educationalbackground']);
Route::get('/youthclassification', [RouteController::class, 'youthclassification']);
Route::get('/workingstatus', [RouteController::class, 'workingstatus']);
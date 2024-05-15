<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RouteController;

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
Route::get('/preference', [RouteController::class, 'preference']);
Route::get('/usersettings', [RouteController::class, 'usersettings']);
<<<<<<< HEAD
Route::get('/login', [RouteController::class, 'login']);

=======
Route::get('/SkOfficials', [RouteController::class, 'skofficials']);
>>>>>>> 54f94f3707037a6ca9e32cb0f086b45e58caebb5

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });
Route::get('/admin/items', function () {
    return view('admin.item');
});
Route::get('/login-register', function () {
    return view('admin.login');
});
Route::get('/admin',[UserController::class, 'admindata']);
Route::post('/login_register',[UserController::class, 'login_register']);
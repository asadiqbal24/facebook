<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\AdminController;
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
    return redirect()->route('login');
});


Route::get('login', [LoginController::class, 'login'])->name('login');


Route::post('loginpost', [LoginController::class, 'loginpost'])->name('loginpost');


Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['prefix' => 'admin',  'middleware' => ['can:admin']], function ()
{
Route::get('admin-home', [AdminController::class, 'admin_home'])->name('admin-home');
Route::get('user-list', [AdminController::class, 'user_list'])->name('user-list');


Route::get('engagement-performance', [AdminController::class, 'engagement_performance'])->name('engagement-performance');



Route::get('demographic-performance', [AdminController::class, 'demographic_performance'])->name('demographic-performance');

Route::get('gender-targeting', [AdminController::class, 'gender_targeting'])->name('gender-targeting');




});

Route::group(['prefix' => 'user',  'middleware' => ['can:user']], function ()
{
Route::get('user-home', [UserController::class, 'user_home'])->name('user-home');
});


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

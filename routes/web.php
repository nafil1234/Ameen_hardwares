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

// Route::get('/', function () {
//     return view('welcome');
// });



//Login
Route::get('/admin/loginview', [App\Http\Controllers\Authentication\LoginController::class, 'AdminLoginView'])->name('adminloginview');
Route::post('/admin/loginstore', [App\Http\Controllers\Authentication\LoginController::class, 'AdminLoginStore'])->name('loginstore');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class,'DasboardView'])->name('dashboardview');
    Route::get('/admin/logout', [App\Http\Controllers\Authentication\LoginController::class, 'AdminLogout'])->name('logout');

    //category
    Route::get('/category', [App\Http\Controllers\Backend\CategoryController::class, 'CategoryView'])->name('categoryview');
    Route::post('/category/store', [App\Http\Controllers\Backend\CategoryController::class, 'CategoryStore'])->name('categorystore');
});




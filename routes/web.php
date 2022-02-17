<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DepositeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
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

Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'check'])->name('login.check');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');




Route::group(['middleware'=>['login_check']],function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');
    Route::resource('/department',DepartmentController::class,['name'=>'department']);
    Route::resource('/student',StudentController::class,['name'=>'student']);
    Route::resource('/deposite',DepositeController::class,['name'=>'deposite']);
    Route::get('deposite/ammount/index',[DepositeController::class,'depositeIndex'])->name('deposite.ammount.index');
    Route::post('deposite/ammount/index',[DepositeController::class,'depositeStore'])->name('deposite.ammount.store');
});
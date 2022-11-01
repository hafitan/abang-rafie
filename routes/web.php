<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\transactionController;



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
    return view('user.layout');
});
Route::get('mahasiswa', function () {
    return view('mahasiswa');
  });


Route::resource('students', StudentController::class);
Route::resource('siswa', SiswaController::class);

// Route Transaction //
Route::get('transaction' , [TransactionController::class , 'index'])->name('transaction.index');
Route::post('transaction/create' , [TransactionController::class , 'store'])->name('transaction.store');

// Route::resource('needs', NeedController::class);
// Auth::routes();

// $route['admin'] = 'admin/dashboard';
// Route::resource('admins', AdminController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



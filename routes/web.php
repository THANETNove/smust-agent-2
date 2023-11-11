<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentSellHouseController;
use App\Http\Controllers\OwnerController;

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

Route::get('/', function () {

    return view('welcome');
});

Auth::routes();
// ส่วนของนายหน้า
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/get-districts/{id}', [HomeController::class, 'districts'])->name('get-districts');
Route::get('/get-amphures/{id}', [HomeController::class, 'amphures'])->name('get-amphures');
Route::get('/get-detall/{id}', [HomeController::class, 'show'])->name('get-detall');
Route::post('/search', [HomeController::class, 'index'])->name('search');


//ส่วนของ admin
Route::group(['middleware' => ['is_admin']], function () {
    Route::get('/create-content', [RentSellHouseController::class, 'create'])->name('create-content');
    Route::post('/add-content', [RentSellHouseController::class, 'store'])->name('add-content');
    Route::get('/edit/{id}', [RentSellHouseController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [RentSellHouseController::class, 'update'])->name('update');
    Route::get('/destroy/{id}', [RentSellHouseController::class, 'destroy'])->name('destroy');
});
//  ส่วนของ owner
Route::group(['middleware' => ['is_owner']], function () {
    Route::get('/add-admin', [OwnerController::class, 'index'])->name('add-admin');
    Route::get('/change-admin/{id}', [OwnerController::class, 'changeAdmin'])->name('change-admin');
    Route::get('/cancel-admin/{id}', [OwnerController::class, 'cancelAdmin'])->name('cancel-admin');
    Route::post('/search-user', [OwnerController::class, 'index'])->name('search-user');

});
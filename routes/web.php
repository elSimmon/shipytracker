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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//shipment routes
Route::get('/shipments', [App\Http\Controllers\ShipmentController::class, 'index'])->name('shipments');
Route::post('/new-shipping', [App\Http\Controllers\ShipmentController::class, 'store'])->name('new-shipping');

//payment gateway routes
Route::get('/gateways', [App\Http\Controllers\GatewayController::class, 'index'])->name('gateways');
Route::post('/new-gateway', [App\Http\Controllers\GatewayController::class, 'store'])->name('new-gateway');

//sender routes
Route::get('/senders', [App\Http\Controllers\SenderController::class, 'index'])->name('senders');
Route::post('/new-sender', [App\Http\Controllers\SenderController::class, 'store'])->name('new-sender');

//receivers routes
Route::get('/receivers', [App\Http\Controllers\ReceiverController::class, 'index'])->name('receivers');
Route::post('/new-receiver', [App\Http\Controllers\ReceiverController::class, 'store'])->name('new-receiver');

//user routes
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::post('/new-user', [App\Http\Controllers\UserController::class, 'store'])->name('new-user');

//vault routes
Route::get('/vaults', [App\Http\Controllers\VaultController::class, 'index'])->name('vaults');
Route::post('/new-vault', [App\Http\Controllers\VaultController::class, 'store'])->name('new-vault');

//profile routes
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::post('/new-vault', [App\Http\Controllers\ProfileController::class, 'store'])->name('new-vault');

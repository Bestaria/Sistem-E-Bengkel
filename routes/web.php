<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;

Route::get('/', function () {
    return redirect('/kendaraan');
});

Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/kendaraan/create', [KendaraanController::class, 'create']);
Route::post('/kendaraan/store', [KendaraanController::class, 'store']);

Route::get('/kendaraan/{id}/edit', [KendaraanController::class, 'edit']);
Route::put('/kendaraan/{id}', [KendaraanController::class, 'update']);

Route::delete('/kendaraan/{id}', [KendaraanController::class, 'destroy']);
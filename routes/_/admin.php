<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PegawaiController;


Route::resource('/', AdminController::class);
Route::resource('pegawai', PegawaiController::class);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\KurirController;


Route::resource('/', AdminController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('module', ModuleController::class);
Route::POST('module/add-role', [ModuleController::class, 'addRole']);
Route::get('module/role/{role}', [ModuleController::class, 'destroyRole']);
Route::resource('kurir', KurirController::class);
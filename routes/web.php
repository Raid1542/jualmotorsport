<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListItemController;
use App\Http\Controllers\DashboardController;

Route::get('/login', [LoginController::class,'index']);



Route::get('/listitem/{id}/{nama_item}', [ListItemController::class, 'tampilkan']);

Route::get('/dashboard/{id}/{nama}/{stok}/{harga}', [DashboardController::class,'tampilkan']);

//Route::get('/', function () {
    //return view('welcome');
//});

//Route::get('/welcome', function () {
    //return view('welcome');
//});

//Route::get('/user/{id}', function ($id) {
    //return 'User dengan ID ' . $id;
//});

//Route::prefix('admin')->group(function () {
    //Route::get('/dashboard', function () {
        //return 'Admin Dashboard';
    //});

    //Route::get('/users', function () {
        //return 'Admin Users';
    //});
//});
//Route::get('/listbarang/{id}/{nama}', function($id, $nama) {
//    return view('list_barang', compact('id', 'nama'));
//});

//Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);


<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CanHoController;
use App\Http\Controllers\CuDanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/register', [AdminController::class, 'register']);
Route::get('/admin/check-token', [AdminController::class, 'checkToken']);
Route::post('/admin/logout', [AdminController::class, 'logout']);


Route::group(['prefix'  =>  '/admin'], function () {
    Route::get('/lay-du-lieu', [AdminController::class, 'getData']);
    Route::post('/them-tai-khoan', [AdminController::class, 'themAdmin']);
    Route::post('/thong-tin-cap-nhat', [AdminController::class, 'capnhatAdmin']);
    Route::post('/doi-trang-thai', [AdminController::class, 'doiTrangThaiAdmin']);
    Route::delete('/thong-tin-xoa/{id}', [AdminController::class, 'xoaAdmin']);
    Route::post('/thong-tin-tim', [AdminController::class, 'timAdmin']);
    Route::post('/doi-mat-khau', [AdminController::class, 'doiPass']);
    Route::get('/lay-du-lieu-profile', [AdminController::class, 'getDataProfile']);

    Route::group(['prefix'  =>  '/cu-dan'], function () {
        Route::get('/lay-du-lieu', [CuDanController::class, 'getData']);
        Route::post('/them-du-lieu', [CuDanController::class, 'themCuDan']);
        Route::post('/thong-tin-cap-nhat', [CuDanController::class, 'capnhatCuDan']);
        Route::post('/doi-trang-thai', [CuDanController::class, 'doiTrangThaiCuDan']);
        Route::delete('/thong-tin-xoa/{id}', [CuDanController::class, 'xoaCuDan']);
        Route::post('/doi-mat-khau', [CuDanController::class, 'doiPass']);
    });
    Route::group(['prefix'  =>  '/can-ho'], function () {
        Route::get('/lay-du-lieu', [CanHoController::class, 'getData']);
        Route::post('/them-du-lieu', [CanHoController::class, 'themCanHo']);
        Route::post('/thong-tin-cap-nhat', [CanHoController::class, 'capnhatCanHo']);
        Route::delete('/thong-tin-xoa/{id}', [CanHoController::class, 'xoaCanHo']);
    });
});

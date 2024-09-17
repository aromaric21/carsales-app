<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('storebrand', [BrandController::class, 'store'])->name('brand.store');
Route::get('allbrands', [BrandController::class, 'index']);
Route::get('brand/{id}/edit', [BrandController::class, 'edit'])->name('brand.edit');
Route::patch('updatebrand/{id}', [BrandController::class, 'update'])->name('brand.update');
Route::delete('deletebrand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');

Route::post('storecarmodel', [CarModelController::class, 'store']);
Route::get('allmodels', [CarModelController::class, 'index']);
Route::patch('updatecarmodel/{id}', [CarModelController::class, 'update']);
Route::delete('deletecarmodel/{id}', [CarModelController::class, 'destroy']);


Route::post('storemember', [MemberController::class, 'store'])->name('member.store');
Route::get('allmembers', [MemberController::class, 'index']);
Route::get('member/{id}/edit', [MemberController::class, 'edit'])->name('member.edit');
Route::patch('updatemember/{id}', [MemberController::class, 'update'])->name('member.update');
Route::delete('deletemember/{id}', [MemberController::class, 'destroy'])->name('member.destroy');


Route::post('storecar', [CarController::class, 'store']);
Route::get('allcars', [CarController::class, 'index']);
Route::patch('updatcar/{id}', [CarController::class, 'update']);
Route::delete('deletecar/{id}', [CarController::class, 'destroy']);

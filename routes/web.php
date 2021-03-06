<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

//    $users = User::all();

    $users = DB::table('users')->get();

    return view('dashboard', compact('users'));

})->name('dashboard');

Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');
Route::get('/category/edit/{id}', [CategoryController::class, 'EditCat'])->name('edit.category');
Route::post('/category/update/{id}', [CategoryController::class, 'UpdateCat'])->name('update.category');
Route::get('/category/softdelete/{id}', [CategoryController::class, 'SoftDeleteCat'])->name('softdelete.category');
Route::get('/category/restore/{id}', [CategoryController::class, 'RestoreCat'])->name('restore.category');
Route::get('/category/permanent/{id}', [CategoryController::class, 'PermanentDeleteCat'])->name('permanent.category');

Route::get('/brand/all', [BrandController::class, 'AllBrand'])->name('all.brand');

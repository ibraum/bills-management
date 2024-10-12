<?php

use App\Http\Controllers\api\v1\ArticleController;
use App\Http\Controllers\api\v1\BillController;
use App\Http\Controllers\api\v1\PaiementController;
use App\Http\Controllers\api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//USERS
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{id}/show', [UserController::class, 'show'])->where( [ 'id' => '[0-9]+' ] )->name('user.show');
Route::post('/user', [UserController::class, 'create'])->name('user.create');
Route::put('/user/{id}/edit', [UserController::class, 'update'])->where( [ 'id' => '[0-9]+' ] )->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->where( [ 'id' => '[0-9]+' ] )->name('user.destroy');

//BILLS
Route::get('/bill', [BillController::class, 'index'])->name('bill.index');
Route::get('/bill/{id}/show', [BillController::class, 'show'])->where( [ 'id' => '[0-9]+' ] )->name('bill.create');
Route::post('/bill', [BillController::class, 'create'])->name('bill.create');
Route::put('/bill/{id}/edit', [BillController::class, 'update'])->where( [ 'id' => '[0-9]+' ] )->name('bill.update');
Route::delete('/bill/{id}', [BillController::class, 'destroy'])->where( [ 'id' => '[0-9]+' ] )->name('bill.destroy');
Route::patch('/bill/{id}/deny', [BillController::class, 'deny'])->where( [ 'id' => '[0-9]+' ] )->name('bill.deny');
Route::patch('/bill/{id}/status', [BillController::class, 'changeStatus'])->where( [ 'id' => '[0-9]+' ] )->name('bill.status');

//ARTICLES
Route::post('/article', [ArticleController::class, 'create'])->name('article.create');
Route::put('/article/{id}/edit', [ArticleController::class, 'update'])->where(['id' => '[0-9]+'])->name('article.update');
Route::delete('/article/{id}', [ArticleController::class, 'destroy'])->where(['id' => '[0-9]+'])->name('article.destroy');

//PAIEMENTS
Route::get('/paiement', [PaiementController::class, 'index'])->name('paiement.index');
Route::post('/paiement', [PaiementController::class, 'create'])->name('paiement.create');
Route::put('/paiement/{id}/edit', [PaiementController::class, 'update'])->where(['id' => '[0-9]+'])->name('paiement.update');
Route::delete('/paiement/{id}', [PaiementController::class, 'destroy'])->where(['id' => '[0-9]+'])->name('paiement.destroy');






Route::get('/usr', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



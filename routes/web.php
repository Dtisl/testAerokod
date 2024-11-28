<?php

use App\Http\Controllers\Admin\MortgageController as AdminMortgageController;
use App\Http\Controllers\Public\MortgageController as PublicMortgageController;
use Illuminate\Support\Facades\Route;

#->middleware('admin')
Route::prefix('resource/admin')->group(function () {
    Route::resource('mortgages', AdminMortgageController::class);
});

Route::prefix('public')->group(function () {
    Route::get('/mortgages', [PublicMortgageController::class, 'index']);
    Route::get('/mortgages/{id}', [PublicMortgageController::class, 'show']);
});

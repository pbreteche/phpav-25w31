<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DefaultController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DefaultController::class, 'index']);
Route::name('articles.')->controller(ArticleController::class)->prefix('articles')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{article}', 'show')->name('show');
});

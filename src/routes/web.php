<?php
use Illuminate\Support\Facades\Route;
use ArnoldKouya\LaraComingSoon\Controllers\ComingSoonController;

Route::get('coming-soon/config', [ComingSoonController::class, 'index'])->name('coming-soon.config');
Route::post('coming-soon/config', [ComingSoonController::class, 'update']);

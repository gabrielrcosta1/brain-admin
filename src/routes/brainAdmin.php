<?php

use BrainAdmin\Controllers\BrainAdminController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['web', 'auth'])->group(function () {
    Route::get('/users', [BrainAdminController::class, 'index'])->name('admin.users.index');
});
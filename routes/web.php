<?php

use App\Http\Controllers\ArtifactController;
use App\Http\Controllers\ExpeditionController;
use App\Http\Controllers\ExplorerController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('explorers', ExplorerController::class)->middleware(['auth', 'verified'])->names(['index' => 'explorers.index',]);
Route::resource('expeditions', ExpeditionController::class)->middleware(['auth', 'verified'])->names(['index' => 'expeditions.index',]);
Route::resource('guides', GuideController::class)->middleware(['auth', 'verified'])->names(['index' => 'guides.index',]);
Route::resource('artifacts', ArtifactController::class)->middleware(['auth', 'verified'])->names(['index' => 'artifacts.index',]);
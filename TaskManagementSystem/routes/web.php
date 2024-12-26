<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskFilterController;
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

    Route::get('/create-task',[TaskController::class,'index'])->name('create-task');
    Route::post('/stored-task',[TaskController::class,'store'])->name('task.store');
    Route::get('/tasks', [TaskFilterController::class, 'index']);
Route::get('/tasks-data', [TaskFilterController::class, 'TaskList'])->name('task.data');

});

require __DIR__.'/auth.php';

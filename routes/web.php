<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LinkController;

Route::get('/', [GameController::class, 'index'])->name('game');
Route::post('/submit-score', [GameController::class, 'submitScore']);
Route::post('/check-device', [GameController::class, 'checkDeviceIdentifier']);
Route::get('/get-leaderboard', [GameController::class, 'getLeaderboard']);

Route::post('/upload', [GalleryController::class, 'upload'])->name('gallery.upload');

Route::resource('links', LinkController::class);


// not used
Route::get('/leaderboard', [GameController::class, 'leaderboard']);

// Route::get('/', function () {
//     $comments = Comment::latest()->get();
//     return view('landing', compact('comments'));
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

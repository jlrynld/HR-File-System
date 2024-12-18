<?php
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::resource('file', FileController::class);

Route::get('', [FileController::class, 'index'])->name('index-home');

Route::prefix('file')->group(function () {

    // List all records
    Route::get('/', [FileController::class, 'index'])->name('content.index');

    // Show form to create a new record
    Route::get('/create', [FileController::class, 'create'])->name('content.create');

    // Store a new record
    Route::post('/', [FileController::class, 'store'])->name('content.store');

    // Show form to edit an existing record
    Route::get('/{id}/edit', [FileController::class, 'edit'])->name('content.edit');

    // Update an existing record
    Route::put('/{id}', [FileController::class, 'update'])->name('content.update');

    // Delete a record
    Route::delete('/{id}', [FileController::class, 'destroy'])->name('content.delete');
});

// Route::middleware('HR')->group(function () {
//     Route::get('/insert', [UserController::class, 'index'])->name('insert.index');
//     Route::post('/insert-post', [UserController::class, 'signUp'])->name('insert-user');

// });




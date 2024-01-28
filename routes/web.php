<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ParticipantController;


// THIS IS FRANCES RIEL A. JULIO CODE
Route::get('/', function () {
    return view('main.index');
});
Route::resource('main',MainController::class);
Route::post('/main/storeParticipant', [MainController::class, 'storeParticipant'])->name('main.storeParticipant');
Route::post('/main/updateParticipant', [MainController::class, 'updateParticipant'])->name('main.updateParticipant');
Route::post('/main/destroyParticipant', [MainController::class, 'destroyParticipant'])->name('main.destroyParticipant');
Route::resource('participants',ParticipantController::class);

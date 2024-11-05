<?php

use App\Http\Controllers\JogosController;
use App\Models\Jogo;
use App\Person;
use Illuminate\Support\Facades\Route;



Route::prefix('jogos')->group(function(){
  Route::get('/', [JogosController::class, 'index'])->name('jogos-index'); 
  Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
  Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
  Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id','[0-9]+')->name('jogos-edit');
  Route::put('/{id}', [JogosController::class, 'update'])->where('id','[0-9]+')->name('jogos-update');
  Route::delete('/{id}', [JogosController::class, 'destroy'])->name('jogos-delete');
});


 Route::fallback(function(){
     return "Erro!";
});


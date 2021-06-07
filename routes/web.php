<?php

use Illuminate\Support\Facades\Route;

/*
/*
Rotas da aplicação. Tem conexão direta com a pasta resources/views.
Na pasta Public foi criado as pastas css, img e js.
*/

use App\Http\Controllers\HoraController;


Route::get('/', function () { // Rota home //
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { // Rota dasnboard //
    return view('dashboard');
})->name('dashboard');

Route::get('/inserir', function () { // Rota da página inserir //
    return view('horas.inserir');
})->middleware('auth');

Route::post('/horas', [HoraController::class, 'store'])->middleware('auth'); // Enviando para tabela horas no bd //


Route::get('/show', [HoraController::class, 'show'], function () {
    return view('horas.show');
})->middleware('auth'); // Rota Controller show //

Route::get('/horas/{id}', [HoraController::class, 'show'])->middleware('auth'); // Rota Controller show para visualizar arquivos do ususário que está logado //


Route::delete('/horas/{id}', [HoraController::class, 'destroy'])->middleware('auth');// Rota delete //


/*
Route::get('/show', function (){
    return view('horas.show');

});
*/

<?php

use Illuminate\Support\Facades\Route;

/*
/*
Rotas da aplicação. Tem conexão direta com a pasta resources/views.
Na pasta Public foi criado as pastas css, img e js.
*/

Route::get('/', function () { // Rota home //
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { // Rota dasnboard //
    return view('dashboard');
})->name('dashboard');

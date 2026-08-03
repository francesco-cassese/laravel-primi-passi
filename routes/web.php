<?php

use Illuminate\Support\Facades\Route;

// --- Homepage ---

Route::get('/', function () {

    $titolo_pagina = "Homepage";

    return view('home', [
        "titolo" => $titolo_pagina
    ]);
})->name('home');

// --- ChiSiamo ---

Route::get('/chi-siamo', function () {

    $titolo_pagina = "Chi siamo";

    return view('chi-siamo', [
        "titolo" => $titolo_pagina
    ]);
})->name('chi-siamo');

// --- Contatti ---

Route::get('/contatti', function () {

    $titolo_pagina = "Contatti";

    return view('contatti', [
        "titolo" => $titolo_pagina
    ]);
})->name('contatti');

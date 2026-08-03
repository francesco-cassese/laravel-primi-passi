<?php

use Illuminate\Support\Facades\Route;

// --- Homepage ---

Route::get('/', function () {

    $titolo_pagina = "Homepage";
    $testo_pagina = "Benvenuto in \"laravel-primi-passi\": un piccolo progetto per esercitarsi con le rotte, le view e i dati dinamici di Blade. Usa il menu qui sopra per navigare tra le pagine.";

    return view('home', [
        "titolo" => $titolo_pagina,
        "testo" => $testo_pagina
    ]);
})->name('home');

// --- ChiSiamo ---

Route::get('/chi-siamo', function () {

    $titolo_pagina = "Chi siamo";
    $testo_pagina = "Questa pagina fa parte dell'esercizio \"laravel-primi-passi\": un progetto per imparare a definire rotte, passare dati dinamici alle view con Blade e creare più pagine collegate tra loro tramite un menu che usa la funzione route().";

    return view('chi-siamo', [
        "titolo" => $titolo_pagina,
        "testo" => $testo_pagina
    ]);
})->name('chi-siamo');

// --- Contatti ---

Route::get('/contatti', function () {

    $titolo_pagina = "Contatti";
    $testo_pagina = "Questa pagina dimostra l'uso della funzione route(): il link che hai cliccato nel menu per arrivare qui è stato generato con route('contatti'), senza scrivere l'URL a mano.";

    return view('contatti', [
        "titolo" => $titolo_pagina,
        "testo" => $testo_pagina
    ]);
})->name('contatti');

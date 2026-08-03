<?php

use Illuminate\Support\Facades\Route;

// --- Homepage ---

Route::get('/', function () {

    $titolo = "Homepage";
    $testo = "Benvenuto in \"laravel-primi-passi\": un piccolo progetto per esercitarsi con le rotte, le view e i dati dinamici di Blade. Usa il menu qui sopra per navigare tra le pagine.";

    return view('home', compact('titolo', 'testo'));
})->name('home');

// --- ChiSiamo ---

Route::get('/chi-siamo', function () {

    $titolo = "Chi siamo";
    $testo = "Questa pagina fa parte dell'esercizio \"laravel-primi-passi\": un progetto per imparare a definire rotte, passare dati dinamici alle view con Blade e creare più pagine collegate tra loro tramite un menu che usa la funzione route().";

    return view('chi-siamo', compact('titolo', 'testo'));
})->name('chi-siamo');

// --- Contatti ---

Route::get('/contatti', function () {

    $titolo = "Contatti";
    $testo = "Questa pagina dimostra l'uso della funzione route(): il link che hai cliccato nel menu per arrivare qui è stato generato con route('contatti'), senza scrivere l'URL a mano.";

    return view('contatti', compact('titolo', 'testo'));
})->name('contatti');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $titolo_pagina = "Hello world!";

    return view('home', [
        "titolo" => $titolo_pagina
    ]);
});

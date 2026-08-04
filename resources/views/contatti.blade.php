<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titolo }} - Laravel-primi-passi</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-contatti">

    @include('partials.header')

    <main id="main-content">
        {{-- Titolo e testo arrivano dalla rotta, non sono scritti qui --}}
        <h1>
            {{ $titolo }}
        </h1>

        <p>
            {{ $testo }}
        </p>
    </main>

</body>

</html>
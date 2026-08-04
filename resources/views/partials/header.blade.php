<a href="#main-content" class="skip-link">Vai al contenuto principale</a>

<header>
    <nav aria-label="Menu principale">
        {{-- Evidenzio il link della pagina in cui mi trovo --}}
        <a href="{{ route('home') }}" @if(request()->routeIs('home')) aria-current="page" @endif>Home</a>
        <a href="{{ route('chi-siamo') }}" @if(request()->routeIs('chi-siamo')) aria-current="page" @endif>Chi siamo</a>
        <a href="{{ route('contatti') }}" @if(request()->routeIs('contatti')) aria-current="page" @endif>Contatti</a>
    </nav>
</header>
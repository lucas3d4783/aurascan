<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="{{ asset('img/icons/logo.png') }}" type="image/png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> 
            @if (isset($title)) 
                {{ $title ?? '' }} | 
            @endif 
            Aura Scan
        </title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="nav">
            <div class="container-start-nav">
                <a href="#" class="btn-nav boder-purple">
                    <img src="{{ asset('img/icons/logo.png') }}" alt="Aura Scan"> Aura Scan
                </a>
            </div>
            
            
            <div class="container-end-nav">
                <a href="#" class="btn-nav">Sobre</a>
                <a href="#" class="btn-nav">Contato</a>
            </div>
            
        </div>

        <header>
            Bem-cindo
        </header>
        
        <div class="main">
            <h1>Aura Scan</h1>
        </div>

        <footer>
            Feito por Lucas Coelho Reichert
        </footer>

    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{--CSS Bootstrap--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

        {{--Link do arquivo css, que está na pasta public/css/styles.css--}}
        <link rel="stylesheet" href="/css/styles.css">

        {{--Link do arquivo java script, está na pasta public/js/scripts.js--}}
        <script src="/js/scripts.js"></script>

    </head>
    <body>

        @yield('content'){{--Aqui é onde vai aparecer o conteúdo--}}

        <div id="topo">
            <h1 class="titulo-topo">dbhoras - Banco de horas para jornada de trabalho</h1>
        </div>


        <div id="menu">
            <a href="/dashboard" class="links-menu">Login</a>
        </div>


        <div id="centro">
            <h1 class="titulo-centro">Centro</h1>
        </div>


        <div id="rodape">
            <footer>{{--Aqui é o rodapé--}}
                <p class="texto-rodape">bdhoras &COPY; 2021 - Todos os direitos reservados</p>
            </footer>
        </div>


    </body>
</html>

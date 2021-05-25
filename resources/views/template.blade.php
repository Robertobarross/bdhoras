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


        {{--Div Topo--}}
        <div id="topo">
            <p class="titulo-topo"><img src="/img/bar.png" class="logo" alt="dbhoras">dbhoras - Banco de horas para jornada de trabalho</p>
        </div>
        {{--Fim da div topo--}}



        {{--Div links do Menu--}}
        <div id="menu">

            @guest {{--Links para login e cadastro--}}
            <a href="/home" class="links-menu">Inicio</a>
            <a href="/login" class="links-menu">Login</a>
            <a href="/register" class="links-menu">Cadastre-se</a>
            @endguest

            @auth {{--Arquivo logout, para encerrar a sessão--}}
           {{-- <a href="/dashboard" class="nav link">Meus eventos</a> --}}
            <form action="/logout" method="POST">
                @csrf
                <a href="/logout"
                class="links-menu"
                onclick="event.preventDefault();
                this.closest('form').submit();">Sair</a>
            </form>
            @endauth

        </div>
        {{--Fim da div links menu--}}


        @yield('content'){{--Aqui é onde vai aparecer o conteúdo--}}


        {{--Div centro--}}
        <div id="centro">
        </div>
        {{--Fim da div centro--}}


        {{--Div rodapé--}}
        <div id="rodape">
            <footer>
                <p class="texto-rodape">bdhoras &COPY; 2021 - Todos os direitos reservados</p>
            </footer>
        </div>
        {{--Fim da div rodapé--}}


    </body>
</html>

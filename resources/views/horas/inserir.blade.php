@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'dbhoras-inserir'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

        {{--Mensagem de cadastro de horas. Conexão com HoraController.php--}}
        @if (session('msg'))
        <p class="texto-form">{{ session('msg') }}</p>
        @endif

<div id="form-hora">
    <h1 class="texto-form">Inserir horas</h1>
    <form action="/horas" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="date" class="texto-form">Informe a data atual:</label>
        <input type="date" class="form-control" id="data" name="data" required>

        <label for="time" class="texto-form">Hora de inicio:</label>
        <input type="time" class="form-control" id="inicio" name="inicio" required>

        <label for="time" class="texto-form">Intervalo:</label>
        <input type="time" class="form-control" id="intervalo" name="intervalo" required>

        <label for="time" class="texto-form">Retorno:</label>
        <input type="time" class="form-control" id="retorno" name="retorno" required>

        <label for="time" class="texto-form">Final do espediente:</label>
        <input type="time" class="form-control" id="final" name="final" required>

        <input type="Submit" class="btn" value="Enviar">
    </form>

    <br><a href="/" class="links-form">Página inicial</a> | <a href="/dashboard" class="links-form">Retornar ao painel</a>

@endsection {{--Extenção do arquivo template--}}



@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'dbhoras-show'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

<p class="titulo-show">Banco de horas</p>

@foreach ($horas as $hora ){{--Declarando variáveis das informações que serão exibidas--}}
   <p class="form-show"> Data: {{ $hora->data }} - Inicio: {{ $hora->inicio }} - Intervalo: {{ $hora->intervalo }} - Retorno: {{ $hora->retorno }} - Final: {{ $hora->final }}</p>
@endforeach

<br><a href="/" class="links-show">Página inicial</a> | <a href="/dashboard" class="links-form">Retornar ao painel</a>


@endsection {{--Extenção do arquivo template--}}

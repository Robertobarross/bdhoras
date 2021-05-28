
@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'dbhoras-show'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

<p>Aula 13 até 18</p>

@foreach ($horas as $hora ) {{--Declarando variáveis das informações que serão exibidas--}}

<p class="texto-form"> Data: {{ $hora->data }} - Inicio: {{ $hora->inicio }} - Intervalo: {{ $hora->intervalo }} - Retorno: {{ $hora->retorno }} - Final: {{ $hora->final }}</p>
@endforeach


@endsection {{--Extenção do arquivo template--}}

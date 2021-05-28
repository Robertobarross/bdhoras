{{--<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>--}}

@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Painel-dbhoras'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

<h1 class="titulo-centro">Seja bem vindo!</h1>
<br><a href="/inserir">Inserir horas</a>
<br><a href="/">Inicio</a>
<br><a href="/show">Show</a>


@endsection {{--Extenção do arquivo template--}}


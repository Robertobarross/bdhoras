
@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'dbhoras-show'){{--Extenção do arquivo template--}}

@section('content'){{--Extenção do arquivo template--}}

<p class="titulo-show">Banco de horas</p>

@if(count($horas) > 0)
@foreach ($horas as $hora ){{--Declarando variáveis das informações que serão exibidas--}}

   <p class="form-show">Usuário: {{ $hora->user_id }} Data: {{ $hora->data }} - Inicio: {{ $hora->inicio }} - Intervalo: {{ $hora->intervalo }} - Retorno: {{ $hora->retorno }} - Final: {{ $hora->final }}
       <button <a href="#" class="btn-show">Editar</a>

        <form action="/horas/{{ $hora->id }}" method="POST">{{--Excluindo registro--}}
        @csrf
        @method('DELETE')
        <button type="submit" class="btn-show" onclick="alert('Tem certeza que quer excluir? A ação não poderá ser desfeira!')">Deletar</button>
        </form>
   </p>
@endforeach

<br><a href="/" class="links-show">Página inicial</a> | <a href="/dashboard" class="links-form">Retornar ao painel</a>

@else{{--Se não tiver nem uma informação, será emitida a mensagem a baixo--}}
<p>Você ainda não tem horas cadstradas, <a href="/inserir">Inserir horas</a></p>
@endif



@endsection {{--Extenção do arquivo template--}}

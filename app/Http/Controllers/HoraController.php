<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hora; // Necessário inserir o Model que foi criado aqui no Controller

use App\Models\User; // Necessário para defineir o usuário //
use Symfony\Component\VarDumper\Cloner\Data;

class HoraController extends Controller
{
        public function store(Request $request) { // Trás dados do formulário inserir para o banco //
            $hora = new Hora;

            // Variáveis que serão preenchidas no banco através do form inserir //
            $hora->data = $request->data;
            $hora->inicio = $request->inicio;
            $hora->intervalo = $request->intervalo;
            $hora->retorno = $request->retorno;
            $hora->final = $request->final;

            $user = auth()->user(); // Para separar envio de horas por usuário //
            $hora->user_id = $user->id;

            $hora->save();// salva os arquivos no banco //
            return redirect('/inserir')->with('msg', 'Horas cadastradas com sucesso!');// Retornar para página inicial //
        }

            public function show(){ // Trazendo dados do banco para ser exibidos na view show //
                $hora = new Hora;

                $horas = Hora::all();

                $user = auth()->user(); // Para separar envio de horas por usuário //
                $hora->user_id = $user->id;

            return view('horas.show', ['horas' => $horas]);
            }


    }


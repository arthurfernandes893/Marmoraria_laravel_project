<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Orcamento;

class EventController extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function parceiros(){
        return view('parceiros');
    }

    public function orcamentos(){
        return view('orcamentos',);
    }

    public function postform(Request $request){
       $orcamento = new Orcamento;  
       $orcamento->nome = $request->nome;
       $orcamento->email = $request->email;
       $orcamento->produto = $request->produto;
       $orcamento->comprimento = $request->comrpimento;
       $orcamento->largura = $request->largura;
       $orcamento->espessura = $request->espessura;

       $orcamento->save();

       $orcamentos = Orcamento::all();
       return view('postform');
    }

    public function mostrarresultados(){
       $orcamentos = Orcamento::all();
       return view('postform',['Orcamento' => $orcamentos]);
    }
}
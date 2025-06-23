<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteService{
    protected $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }
    function create(){
        return view('clientes.clientecreate');
    }
    function store(){
        $cliente = new Cliente;
        $cliente->nome = $this->request->input('nome');
        $cliente->telefone = $this->request->input('telefone');
        $cliente->email = $this->request->input('email');
        $cliente->senha = bcrypt($this->request->input('senha'));
        $cliente->cpf = $this->request->input('cpf');
        $cliente->data_nascimento = $this->request->input('data_nascimento');
        $cliente->save();

        return redirect('cliente')->with('msg', 'Cadastro realizado com sucesso!');
    }
    
}
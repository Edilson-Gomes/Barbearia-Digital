<?php

namespace Src\App\Modules\Clientes\Services;

use Illuminate\Http\Request;
use Src\App\Modules\Clientes\Models\Cliente;

class ClienteService{
    protected $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }
    function create(){
        return view('Modules.Clientes.Views.cliente');
    }
    function store(){
        $cliente = new Cliente;
        $cliente->nome = $this->request->input('nome');
        $cliente->telefone = $this->request->input('telefone');
        $cliente->email = $this->request->input('email');
        $cliente->cpf = $this->request->input('cpf');
        $cliente->data_nascimento = $this->request->input('data_nascimento');
        $cliente->save();

        return redirect('/cliente')->with('msg', 'Cadastro realizado com sucesso!');
    }
    
}
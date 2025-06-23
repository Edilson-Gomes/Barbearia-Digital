<?php

namespace App\Services;

use App\Models\Profissional;
use Illuminate\Http\Request;
use App\Models\Agendamento;

class AgendamentoService {
    protected $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }
    public function create() {
        $profissionais = Profissional::all();
        return view('agendamentos.agendamento', compact('profissionais'));
    }
    public function store(){
        $agendar = new Agendamento();
        $agendar->servico = $this->request->input('servico');
        $agendar->data = $this->request->input('data');
        $agendar->horario = $this->request->input('horario');
        $agendar->profissional_id = $this->request->input('profissional_id');
        $agendar->save();

        return redirect('cliente')->with('msg', 'Agendamento registrado com sucesso!');
    }
}
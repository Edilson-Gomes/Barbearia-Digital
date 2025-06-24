<?php

namespace App\Services;

use App\Models\Profissional;
use Illuminate\Http\Request;
use App\Models\Agendamento;
use Illuminate\Support\Facades\Auth;

class AgendamentoService {
    protected $request;
    public function __construct(Request $request) {
        $this->request = $request;
    }
    public function index()
    {
        $cliente = Auth::guard('cliente')->user();

        $agendamentos = Agendamento::whereHas('profissional')
        ->where('cliente_id', $cliente->id ?? null)
        ->with('profissional')
        ->orderBy('data', 'asc')
        ->orderBy('horario', 'asc')
        ->get();

        return view('agendamentos.meus_agendamentos', compact('agendamentos'));
    }
    public function proximoAgendamento()
    {
        $cliente = Auth::guard('cliente')->user();

        $agendamento = Agendamento::whereHas('profissional')
            ->where('cliente_id', $cliente->id ?? null)
            ->whereDate('data', '>=', now()->toDateString())
            ->with('profissional')
            ->orderBy('data', 'asc')
            ->orderBy('horario', 'asc')
            ->first(); // retorna só o mais próximo

        return view('clientes.cliente', compact('agendamento'));
    }

    public function create() 
    {
        $profissionais = Profissional::all();
        return view('agendamentos.agendamento', compact('profissionais'));
    }
    public function store()
    {
        $agendar = new Agendamento();
        $agendar->servico = $this->request->input('servico');
        $agendar->data = $this->request->input('data');
        $agendar->horario = $this->request->input('horario');
        $agendar->profissional_id = $this->request->input('profissional_id');
        $agendar->cliente_id = Auth::guard('cliente')->id();
        $agendar->save();

        return redirect('cliente')->with('msg', 'Agendamento registrado com sucesso!');
    }
    public function destroy($id)
    {
        $agendamento = Agendamento::findOrFail($id);
        
        if ($agendamento->cliente_id !== Auth::guard('cliente')->id()) {
            return redirect()->back()->with('msg', 'Você não tem permissão para cancelar este agendamento.');
        }
        $agendamento->delete();
        return redirect()->route('agendamentos')->with('msg', 'Agendamento cancelado com sucesso!');
    }
}
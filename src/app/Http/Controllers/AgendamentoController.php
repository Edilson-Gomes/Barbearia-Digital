<?php

namespace App\Http\Controllers;

use App\Services\AgendamentoService;

class AgendamentoController extends Controller
{
    protected $agendamentoService;
    public function __construct(AgendamentoService $agendamentoService) {
        $this->agendamentoService = $agendamentoService;
    }
    public function index(){
        return $this->agendamentoService->index();
    }
    public function create(){
        return $this->agendamentoService->create();
    }
    public function store(){
        return $this->agendamentoService->store();
    }
    public function destroy($id){
        return $this->agendamentoService->destroy($id);
    }
}

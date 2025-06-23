<?php

namespace App\Http\Controllers;

use App\Services\AgendamentoService;

class AgendamentoController extends Controller
{
    protected $agendamentoService;
    public function __construct(AgendamentoService $agendamentoService) {
        $this->agendamentoService = $agendamentoService;
    }
    public function create(){
        return $this->agendamentoService->create();
    }
    public function store(){
        return $this->agendamentoService->store();
    }
}

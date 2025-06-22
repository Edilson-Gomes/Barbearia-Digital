<?php

namespace App\Http\Controllers;

use App\Services\ClienteService;

class ClienteController extends Controller
{
    protected ClienteService $clienteService;
    public function __construct(ClienteService $clienteService) {
        $this->clienteService = $clienteService;
    }
    function create(){
        $this->clienteService->create();
    }
    function store(){
        $this->clienteService->store();
    }
}

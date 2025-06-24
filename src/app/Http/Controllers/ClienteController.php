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
        return $this->clienteService->create();
    }
    function store(){
        return $this->clienteService->store();
    }
}

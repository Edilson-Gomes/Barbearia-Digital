<?php

namespace Src\App\Modules\Clientes\Http\Controllers;

use App\Http\Controllers\Controller;
use Src\App\Modules\Clientes\Services\ClienteService;

class ClienteController extends Controller {
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
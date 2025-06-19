<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CriarModulo extends Command
{
    protected $signature = 'make:modulo {nome}';
    protected $description = 'Cria a estrutura básica de um módulo';

    public function handle()
    {
        $nomeModulo = ucfirst($this->argument('nome'));
        $caminhoBase = app_path("Modules/{$nomeModulo}");

        if (File::exists($caminhoBase)) {
            $this->error("O módulo '{$nomeModulo}' já existe.");
            return;
        }

        // Estrutura do módulo
        $pastas = [
            'Http/Controllers',
            'Models',
            'Views',
            'Services'
        ];

        foreach ($pastas as $pasta) {
            File::makeDirectory("{$caminhoBase}/{$pasta}", 0755, true);
        }

        // Criar arquivo de rotas
        File::put("{$caminhoBase}/routes.php", "<?php\n\nuse Illuminate\\Support\\Facades\\Route;\n\nRoute::prefix('" . strtolower($nomeModulo) . "')->group(function () {\n    // Rotas do módulo\n});");

        $this->info("Módulo '{$nomeModulo}' criado com sucesso em app/Modules/{$nomeModulo}.");
    }
}
# Decisão de Arquitetura - Barbearia Digital

## Contexto
Durante o planejamento inicial do projeto, foi discutido qual seria a arquitetura mais adequada para o sistema Barbearia Digital, considerando fatores como simplicidade de deploy, manutenção e recursos da equipe.

## Decisão
Optamos por utilizar uma **arquitetura monolítica modular**, desenvolvida com o framework **Laravel** e utilizando o banco de dados **LiteSQL**.

### Motivos
- Laravel oferece uma estrutura robusta e produtiva para projetos PHP.
- A modularidade permitirá evoluir o sistema sem comprometer a organização do código.
- LiteSQL é leve e suficiente para o escopo inicial do sistema.

### Estrutura Modular 

---

```
src/  
└── app/  
    ├── Http/  
    │   └── Controllers/  
    │       ├── AgendamentoController.php  
    │       ├── ClienteController.php  
    │       ├── LoginController.php  
    │       └── ProfissionalController.php  
    ├── Models/  
    │   ├── Agendamento.php  
    │   ├── Cliente.php  
    │   └── Profissional.php  
    ├── Services/  
    │   ├── AgendamentoService.php  
    │   ├── ClienteService.php  
    │   └── ProfissionalService.php 
    ├── Views/  
    │   ├── Agendamentos/ 
    │   ├── Clientes/  
    │   └── ...  
    └── Routes/  
        └── ...
```
---
        
## Próximos Passos
- Criar diretrizes de desenvolvimento e documentação técnica.

---


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

## 📘 Diretrizes de Desenvolvimento

### 🔹 Organização do Projeto
- **Controllers**: Camada responsável por orquestrar as requisições, validando dados e acionando os serviços necessários.
- **Models**: Representam as entidades do sistema e contêm a lógica de acesso a dados.
- **Views**: Camada de apresentação, especialmente se estiver usando algum template engine.
- **Services**: Contêm a lógica de negócio central. Devem ser reutilizáveis e independentes de framework.
- **Providers**: Serviços auxiliares como autenticação, fila, notificações, etc.

### 🔹 Padrões de Código
- Utilize **PSR-12** como guia de estilo para código PHP.
- Siga o padrão de **injeção de dependência** para promover testabilidade.
- Nomeie arquivos e classes com clareza e coerência, como `AgendamentoService.php` ou `AgendamentoController.php`.

### 🔹 Versionamento e Repositório
- Use `main` e `develop` como branches principais.
- Commits devem ser descritivos: `feat: criar endpoint de agendamento`, `fix: corrigir erro no serviço de notificação`, etc.
- Pull requests devem ser revisados por pelo menos um outro desenvolvedor.

---

## 📚 Diretrizes de Documentação Técnica

### 📄 README Principal
- Descrição do projeto, como rodar localmente, e estrutura geral das pastas.
- Tecnologias utilizadas.
- Contato e contribuição.

### 🧩 Documentação por Módulo
Cada pasta principal (`Controllers`, `Services`, etc.) pode conter um `README.md` explicando:
- Objetivo do módulo.
- Dependências importantes.
- Padrões e práticas recomendadas.

### 📊 Diagramas (opcional)
- Caso aplicável, inclua **diagramas de sequência**, **diagramas de fluxo de dados** ou um **diagrama de pastas** mostrando a modularização.

### 🔐 Segurança e Boas Práticas
- Trate todos os dados de entrada como não confiáveis.
- Armazene senhas e tokens em variáveis de ambiente, nunca em código.

---




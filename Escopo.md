## Escopo Inicial do Projeto

**Nome:** Barbearia Digital  
**Objetivo:** Gerenciar barbearias de bairro com foco em agendamento, cadastro de clientes e organização dos serviços.  
**Arquitetura:** Monolítica modular (Laravel + LiteSQL)  
**Padrão de Design:** MVC  
**Padrão de Código:** PSR-12 + Injeção de Dependência  
**Artefatos de Requisitos:** RF, RNF, RN, US, UC — todos em Markdown com nomeclatura padronizada.

---

##  O que o sistema vai fazer?

-  Cadastro de clientes  
-  Agendamento de serviços (corte, barba, etc.)  
-  Visualização dos agendamentos por cliente ou profissional  
-  Autenticação e controle de acesso (previsto em etapas futuras)  

---

##  Tipos de Etapas de Desenvolvimento

| Tipo de Etapa    | Descrição                                                                |
|------------------|--------------------------------------------------------------------------|
| A - Evolutiva    | Adição de novas funcionalidades como envio de notificações ou relatórios |
| B - Corretiva    | Correção de bugs, erros em regras ou funcionalidades quebradas           |
| C - Adaptativa   | Ajustes para compatibilidade com navegadores, dispositivos ou novas libs |
| D - Evolutiva    | Expansão da base de serviços (ex: múltiplas barbearias, promoções)       |
| E - Corretiva    | Revisões de segurança, problemas de login, dados inconsistentes          |

---

##  Tabela de Tarefas e Rastreabilidade

| Tarefa                       | Ação / Para                                            | Papel Responsável      |
|------------------------------|--------------------------------------------------------|------------------------|
| [RF01_CadastrarCliente](https://github.com/Edilson-Gomes/Barbearia-Digital/blob/main/docs/funcionais/RF01_CadastrarCliente.md)       | Criar funcionalidade de cadastrar clientes  (#5)         | Dev                    |
| [RF02_AgendarServicos](https://github.com/Edilson-Gomes/Barbearia-Digital/blob/main/docs/funcionais/RF02_AgendarServiço.md)       | Criar funcionalidade de agendar serviços  (#6)         | Dev                    |
| [RF03_VisualizarAgendamento](https://github.com/Edilson-Gomes/Barbearia-Digital/blob/main/docs/funcionais/RF03_VisualizarAgendamento.md)       | Criar funcionalidade de visualizar agendamentos  (#7)         | Dev                    |
| UC01_CadastrarCliente        | Modelar caso de uso e validar com equipe               | PO + Dev               |
| [RNF04_Usabilidade](https://github.com/Edilson-Gomes/Barbearia-Digital/tree/main/docs/n%C3%A3o%20funcionais)            | Garantir UX intuitiva e responsiva (#5, #6, #7)                     | QA + Dev               |
| DefiniçãoFuncionais          | [Documentar stories de usuário](https://github.com/Edilson-Gomes/Barbearia-Digital/tree/main/docs/user_stories)                          | PO                     |
| AgendamentoService.php       | Implementar lógica de agendamentos (#6)                     | Dev                    |
| Testes de agendamento        | Verificar agendamento correto com cliente válido       | QA                     |
| README principal             | Criar documento com estrutura e instruções do sistema (#9) | Dev + PO               |
| Diagrama de casos de uso     | Criar visualização dos fluxos principais               | PO                     |
| Validação de requisitos      | Checklist de cobertura das funcionalidades propostas   | QA                     |
| Revisar código PSR-12        | Padronizar conforme estilo oficial PHP                 | QA + Dev               |

---

##  Tabela de Papéis e Responsabilidades

| Papel | Responsabilidade Principal                                                 |
|-------|----------------------------------------------------------------------------|
| PO    | Definir requisitos, validar entregas, manter visão do produto              |
| Devs  | Implementar funcionalidades, seguir arquitetura e boas práticas            |
| QA    | Garantir qualidade, testar cenários e validar requisitos não funcionais    |

---

##  MER do Sistema


![MER](barbearia-digital\docs\diagramas\MER.png)




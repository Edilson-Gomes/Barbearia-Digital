### Agendar Serviço

| **Campo**           | **Detalhes**                                                                 |
|---------------------|------------------------------------------------------------------------------|
| **ID**              | RF02                                                                         |
| **Descrição**       | O sistema deve permitir que o cliente agende um serviço com data, horário e profissional disponíveis. |
| **Prioridade**      | Alta                                                                          |
| **Entrada**         | Cliente seleciona serviço, data, horário e profissional                       |
| **Processamento**   | Verificação de disponibilidade; validação do horário; bloqueio de horários ocupados |
| **Saída**           | Agendamento registrado e confirmação enviada ao cliente                      |
| **Restrição**       | Agendamento apenas em horários vagos; profissional deve estar disponível      |
| **Regra de Negócio**| Não é permitido mais de um agendamento no mesmo horário com o mesmo profissional |


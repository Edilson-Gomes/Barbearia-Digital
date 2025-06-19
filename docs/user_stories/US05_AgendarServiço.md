### História de Usuário — RF02: Agendar Serviço
**COMO** cliente da barbearia,  
**QUERO** agendar um serviço com data, horário e profissional definidos,  
**PARA** que eu possa garantir meu atendimento sem filas ou espera.  


#### Critérios de Aceitação:
- O cliente pode selecionar o tipo de serviço, data, horário e profissional
- O sistema deve validar:
- Se o profissional está disponível naquele horário
- Se o horário não está bloqueado ou já ocupado
- Ao confirmar, o sistema deve registrar o agendamento e exibir mensagem de sucesso: “Agendamento realizado com sucesso”
- O profissional não pode ter dois agendamentos simultâneos

#### Regra de Negócio:
- Cada horário pode conter apenas um agendamento por profissional

Prioridade: Alta  
ID da Requisição: [RF02](https://github.com/Edilson-Gomes/Barbearia-Digital/blob/main/docs/funcionais/RF02_AgendarServi%C3%A7o.md)

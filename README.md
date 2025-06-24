# Barbearia-Digital
Este projeto é uma aplicação web desenvolvida para gerenciar barbearias de bairro de forma eficiente e modular, utilizando princípios do padrão MVC e boas práticas de organização de código.  

### O que aplicação vai fazer?  
* Cadastrar clientes;
* Agendar serviços de corte;
* Visualizar agendamentos;

### Padrão de Artefatos de Requisitos
- Tipo: Requisitos Funcionais (RF), Requisitos Não Funcionais (RNF), Regras de Negócios (RN), User Stories (US) e Casos de Uso (UC).
- Formato: Markdown (.md).

### Padrão de Nomeclatura
- RF01_CadastrarCliente.md - para requisitos funcionais.
- RNF01_Usabilidade.md - para requisitos não funcionais.
- US01_DefiniçaoRequisitosFuncionais.md - para user stories.
- UC01_CadastrarCliente.md - para casos de uso.  


---

##  Como rodar localmente

1. **Clone o repositório**
   ```bash
   git clone https://seu-repositorio.git
   cd nome-do-projeto
   ```

2. **Configure as dependências**
   - Certifique-se de ter PHP 8+, Composer e um servidor local (como XAMPP, Laragon ou Laravel Valet).
   - Instale as dependências:
     ```bash
     composer install
     ```

3. **Configuração do ambiente**
   - Duplique o arquivo `.env.example` e renomeie para `.env`.
   - Configure variáveis como conexão com banco de dados, chave da aplicação e credenciais.

4. **Crie a base de dados**
   - Execute as migrações, caso esteja usando um ORM:
     ```bash
     php artisan migrate
     ```

5. **Inicie o servidor**
   ```bash
   php artisan serve
   ```

6. Acesse `http://localhost:8000` no navegador.

---

##  Estrutura geral de pastas

```
├── Controllers/           # Controladores da aplicação
├── Models/                # Modelos que representam entidades do sistema
├── Views/                 # Arquivos de visualização (front-end)
├── Services/              # Lógica de negócio
├── Providers/             # Componentes auxiliares (ex: autenticação, fila)
├── routes/                # Definição de rotas da aplicação
├── public/                # Arquivos públicos (index.php, assets)
├── .env                   # Configurações de ambiente
```

---

##  Tecnologias utilizadas

- PHP 8.x
- Composer
- MySQL, PostgreSQL ou SQLite(para desenvolvimento)
- HTML, TailwindCSS ou (HTML, CSS, JavaScript)
- (Opcional) Blade, Twig ou outro template engine
- (Se aplicável) Framework como Laravel ou Slim

---

##  Contato e contribuição

- **Desenvolvedor principal:** @Edilson-Gomes  
- **Email:** edilsongomesilustrador@gmail.com
- **Contribuições:** são muito bem-vindas! Para contribuir:
  1. Faça um fork do projeto
  2. Crie uma branch com sua feature: `git checkout -b minha-feature`
  3. Faça o commit: `git commit -m 'Minha contribuição'`
  4. Envie o push para o GitHub: `git push origin minha-feature`
  5. Crie um Pull Request

---


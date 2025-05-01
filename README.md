# Curso de Laravel 11 — Cadastro de Usuários

![Laravel](https://img.shields.io/badge/Laravel-11.x-ff2d20?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-06b6d4?style=for-the-badge&logo=tailwind-css&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777bb4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-2.x-885630?style=for-the-badge&logo=composer&logoColor=white)
![NPM](https://img.shields.io/badge/NPM-9.x-CB3837?style=for-the-badge&logo=npm&logoColor=white)
![License: MIT](https://img.shields.io/badge/License-MIT-yellow?style=for-the-badge)
[![Status](https://img.shields.io/badge/status-Em%20Desenvolvimento-yellow.svg)]()

---
## 📚 Sobre o Projeto

Este projeto foi desenvolvido como parte de um curso de aprendizado prático de Laravel, com o objetivo de aplicar as boas práticas do framework.

O projeto consiste em um sistema de **cadastro de usuários**, utilizando:
- **Laravel 11** para o backend
- **TailwindCSS** para a estilização
- Aplicando princípios de organização de código, rotas, controllers, validações e layouts.

---

## 🚀 Melhorias em Desenvolvimento

Este projeto está em constante evolução. As próximas implementações planejadas são:

- 📌 **Módulo de Fórum**:  
  Área de interação entre os usuários cadastrados, permitindo postagens de mensagens, comentários e envio de fotos.

- 📌 **API REST**:  
  Desenvolvimento de uma API RESTful para fornecer dados ao aplicativo **mobile**.

- 📱 **Aplicativo Mobile (React Native)**:  
  Será desenvolvido um app mobile que irá consumir a API do projeto Laravel, permitindo interações como cadastro, login, fórum e outras funcionalidades.

---

## ✨ Tecnologias Utilizadas

- [Laravel 11](https://laravel.com/docs/11.x)
- [TailwindCSS](https://tailwindcss.com/)
- [PHP 8.2+](https://www.php.net/releases/8.2/)
- [MySQL 8.x](https://dev.mysql.com/doc/)
- [Composer](https://getcomposer.org/)
- [NPM](https://www.npmjs.com/)
- [API REST]()

---

## 📚 Objetivos do Projeto

- Entender a estrutura básica de um projeto Laravel.
- Utilizar recursos modernos do Laravel como controllers, requests, validation e Eloquent ORM.
- Aplicar princípios de Clean Code e boas práticas.
- Estilizar as páginas com **TailwindCSS** de forma prática e responsiva.
- Criar operações CRUD (Create, Read, Update, Delete) completas para a entidade **Usuário**.

---

## ⚙️ Instalação e Execução

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
   ```

2. Instale as dependências PHP:
   ```bash
   composer install
   ```

3. Instale as dependências JavaScript:
   ```bash
   npm install
   ```

4. Copie o arquivo `.env.example` para `.env`:
   ```bash
   cp .env.example .env
   ```

5. Configure o banco de dados no arquivo `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nome_do_banco
   DB_USERNAME=usuario
   DB_PASSWORD=senha
   ```

6. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

7. Execute as migrations para criar as tabelas:
   ```bash
   php artisan migrate
   ```

8. Compile os assets do Tailwind:
   ```bash
   npm run dev
   ```

9. Inicie o servidor:
   ```bash
   php artisan serve
   ```

10. Acesse o projeto:
    ```
    http://localhost:8000
    ```

---

## 📋 Funcionalidades

- Cadastro de novos usuários
- Listagem de usuários
- Edição de informações de usuários
- Exclusão de registros
- Validação de formulários
- Layout responsivo e moderno com TailwindCSS

---

## 🛠️ Estrutura do Projeto

```
app/
├── Http/
│   ├── Controllers/
│   ├── Requests/
│   └── ...
resources/
├── views/
│   ├── users/
│   └── layouts/
routes/
├── web.php
database/
├── migrations/
```

---

## 🚀 Aprendizados

- Utilização de rotas, controllers e views no padrão MVC.
- Trabalhar com validações de formulários via Form Request.
- Estilizar com TailwindCSS de maneira produtiva.
- Aplicar padrões de projeto e organização de código no Laravel.

---

## 🔥 Melhorias Futuras

O projeto receberá novos módulos para expandir suas funcionalidades:

- **Módulo de Fórum de Assuntos**: 
  - Área de interação entre usuários cadastrados.
  - Criação de tópicos, postagens e troca de mensagens com upload de fotos.
  - Sistema de status e resposta.

- **Implementação de API REST**:
  - Desenvolvimento de endpoints para integração externa.
  - Suporte a operações CRUD via API usando autenticação segura.

Essas melhorias proporcionarão um ambiente completo de prática em Laravel Fullstack.

---

## 🗺️ Roadmap

- [x] Cadastro básico de usuários
- [x] CRUD completo utilizando controllers e requests
- [x] Integração com TailwindCSS
- [ ] Módulo de Fórum de Discussões
- [ ] Suporte a upload de imagens em posts
- [ ] Criação de API REST para usuários
- [ ] Autenticação via API Token
- [ ] Melhorias no layout com Tailwind e componentes reutilizáveis
- [ ] Testes automatizados (Feature e Unit tests)

--

## 🧑‍💻 Autor

Projeto desenvolvido por **[Felipe Costa de Jesus]** — [LinkedIn](https://www.linkedin.com/in/Felipe-Cjesus)  
Contato: felipecosta.developer@gmail.com

---

**Licença:** Este projeto está licenciado sob a licença MIT.

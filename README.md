# Cadlog-system

## Tela de Login

![image info](https://github.com/poxxataly26/cadlog-system/blob/main/img/Login.png)

## Tela de Cadastro 

![image info](https://github.com/poxxataly26/cadlog-system/blob/main/img/Cadastro.png)

## Registrado

![image info](https://github.com/poxxataly26/cadlog-system/blob/main/img/Registrando.png)

## Dashboard

![image info](https://github.com/poxxataly26/cadlog-system/blob/main/img/Dashboard.png)

## Gif

Este projeto mostra um sistema de autenticação de usuários com diferentes perfis (admin, gestor, colaborador), além de permitir a gestão de usuários (criação, edição e exclusão).

![image info](https://github.com/poxxataly26/cadlog-system/blob/main/img/Gif.gif)

## Organização, vou explicar o que cada um desses controladores a baixo.

## 1 - AuthController

Gerencia a autenticação de usuários.

### Principais Funções:

* Login: (Email e Senha) verifica se estão corretas.
* Logout: Encerrar a sessão do usuário.
* Registro: Criar um novo usuário no sistema, a validação de dados e ver se a senha é segura.
* Recuperação de Senha: Permitir que os usuários recuperem suas senhas se esquecer.

## 2 - DashboardController

Gerencia a lógica do painel de controle da aplicação.

### Principais Funções:

* Exibir Dados: Coletar e apresentar informações para o usuário, como estatísticas, gráficos e resumos de atividades.
* Controle de Acesso: Garantir que apenas usuários autenticados e autorizados possam acessar o dashboard.

## 3 - UserController

Relaciona aos usuários do sistema.

### Principais Funções:

* Listar Usuários: Recuperar e mostrar uma lista de usuários cadastrados.
* Criar/Editar Usuário: Permitir a criação de novos usuários e a edição das informações de usuários que existe
* Deletar Usuário: Remover usuários do sistema.
* Gerenciar Perfis: Permitir que os usuários atualizem suas informações pessoais e preferências.

## Introdução

Este é um codigo de gerenciamento de usuários desenvolvido em PHP, com o objetivo fácil de usar para gerenciar contas de usuários.

## Descrição

O sistema permite que os usuários se cadastrem e façam login. Ele utiliza (Model-View-Controller) para separar a lógica de negócios da apresentação, tornando mais fácil. 

## Estrutura do Projeto

O projeto tem vários arquivos e classes que fazem em conjunto as funcionalidades exatas.

## Arquivos Principais

* Index.php: Arquivo principal que gerencia as rotas e chamadas para os controladores de autenticação, usuários e dashboard.  
* Models/user.php: Modelo de dados que representa o usuário e possui métodos para interagir com o banco de dados.  
* Models/database.php: Classe responsável pela conexão com o banco de dados utilizando PDO.  
* Controllers/AuthController.php: Controlador de autenticação, responsável pelas funcionalidades de login e logout.  
* Controllers/UserController.php: Controlador para registro, listagem, edição e exclusão de usuários.
* Controllers/DashboardController.php: Controlador responsável por exibir o painel de controle (dashboard).  
* Views/login.php: Formulário de login.  
* Views/register.php: Formulário de cadastro de novos usuários.  
* Views/dashboard.php: Página do dashboard, exibindo o painel de controle baseado no perfil do usuário.  
* Views/list_users.php: Página para listagem e gerenciamento de usuários.  

### Funcionalidades

* Login: Usuários podem se cadastrar no sistema utilizando email e senha.  
* Logout: Usuários podem sair da sessão, o que destruirá a sessão ativa.  
* Cadastro: Novos usuários podem ser cadastrados no sistema, atribuindo um perfil (admin, gestor ou colaborador).  
* Dashboard: Dependendo do perfil, usuários terão acesso a funcionalidades específicas no painel de controle.  
* Gerenciamento de Usuários: Administradores e gestores podem editar e excluir usuários.  
* Controle de Sessões: A sessão de usuário é gerenciada de forma que apenas usuários autenticados possam acessar áreas restritas. 

### Tecnologias Utilizadas

* PHP  
* MySQL  
* HTML5  
* CSS  

## Arquitetura

O sistema utiliza uma arquitetura MVC, com as seguintes pastas: 

* Model: É responsável pela lógica e interação com o banco de dados  
* View: É responsável pela apresentação do usuário  
* Controller: É responsável por gerenciar as requisições e respostas do sistema    
* Css: Arquivos de estilos CSS utilizados nas views.

## Autores

. Talyta Augusto  
[Link](https://github.com/poxxataly26/cadlog-system) 
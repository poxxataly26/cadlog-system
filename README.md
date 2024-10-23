# Cadlog-system

## Tela de Login

![image info](https://github.com/poxxataly26/cadlog-system/blob/main/img/Login.png)

## Tela de Cadastro 

![image info](https://github.com/poxxataly26/cadlog-system/blob/main/img/Cadastro.png)

## Registrado

![image info]()

## Dashboard

![image info]()

## Lista de Usuário

![image info]()

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

### Funcionalidades

Cadastro de usuário
Login de usuário
Validação de senha segura 

### Tecnologias Utilizadas

.PHP  
.MySQL  
.HTML5  
.CSS  

## Arquitetura

O sistema utiliza uma arquitetura MVC, com as seguintes pastas:  
Model: É responsável pela lógica e interação com o banco de dados  
View: É responsável pela apresentação do usuário  
Controller: É responsável por gerenciar as requisições e respostas do sistema  

## Autores

. Talyta Augusto  
[Link](https://github.com/poxxataly26/cadlog-system) 
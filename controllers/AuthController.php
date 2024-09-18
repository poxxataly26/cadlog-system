<?php

require_once 'models/user.php';

// classe responsável pela autenticação do usuário
class AuthController
{
    // Função responsável pelo processo de login
    public function login(){

        // Verifica se a requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
        }
    }
}

?>
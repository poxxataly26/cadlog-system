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

            $user = User::findByEmail($email);
            // password_verify verifica se a senha correspondente a um hash
            if($user && password_verify($senha, $user['senha'])){
                session_start();

                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil']     = $user['perfil']; 
                
                header('Location: index.php?action=dashboad');
            }else{
                include 'views/register.php';
            }
        }else{
            include 'views/login.php';
        }
    }
}

?>
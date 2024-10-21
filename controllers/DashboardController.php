<?php

class DashboardController
{
    // função index, responsavel por exibir a pagina deshboard
    public function index()
    {
        // função que vai iniciar a seção para verificar se o usuario está autenticado 
        session_start();
        if(!isset($_SESSION['usuario_id'])){
            // redireciona o usuario para pagina inicial
            header('Location: index.php');
            exit; // garante que o script seja interronpido 
        }
        // se o usuario estiver autenticado, inclui a view 'deshboard', que exibe o painel de controle
        include 'views/dashboard.php';
    }
}
?>
<?php
// Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controllers/AuthController.php'; // instancia controlador de autenticação
require 'controllers/UserController.php'; // instancia o controlador de usuário
require 'controllers/DashboardController.php'; // intancia controlador de dashboard

// Cria instância dos controladores para utilizar seus métodos
$authController = new AuthController();
$userController = new UserController();
$dashboradController = new DashboardController();

// Coleta a ação da URL, se não ouver ação definida, usa 'login' como padrão
$action = $_GET['action'] ?? 'login'; // Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente

switch ($action){
    case 'login':
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'register':
        $userController->register();
        break;
    case 'dashboard';
        $dashboradController->index();
        break;
    case 'list':
        $userController->list();
        break;
    case 'edit':
        $id = $_GET['id'];
        $userController->edit($id);
        break;
    case 'delete':
        $id = $_GET['id'];
        $userController->delete($id);
        break;
    default:
        $authController->login();
        break;
}

<?php
// Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controllers/AuthController.php'; // instancia controlador de autenticação
require 'controllers/UserController.php'; // instancia o controlador de usuário
require 'controllers/DashboardController.php'; // intancia controlador de dashboard

// Cria instância dos controladores para utilizar seus métodos
$authController = new AuthController();
$userController = new UserController();
$dashboradController = new DashboardController();


?>
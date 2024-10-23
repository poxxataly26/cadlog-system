<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}
.container {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h1 {
    color: #333;
    margin-top: 0;
}
p {
    color: #666;
    margin-bottom: 20px;
}
.btn {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.btn:hover {
    background-color: #3e8e41;
}
a {
    text-decoration: none;
    color: #337ab7;
}
a:hover {
    color: #23527c;
}
.area-exclusiva {
    background-color: #f9f9f9;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    margin-bottom: 20px;
}
.area-exclusiva p {
    margin-bottom: 10px;
}
</style>

    <title>Dashboard</title>

</head>

<body class="<?=$_SESSION['perfil']?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?= $_SESSION['perfil']?>!</h1>
        <p>Esta é a visão do perfil perfil <?= $_SESSION['perfil']?>.</p>
       
        <?php if ($_SESSION['perfil'] == 'admin'): ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>

        <?php elseif ($_SESSION['perfil'] == 'gestor'): ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
            
        <?php else: ?>    
            <p>Área exclusiva do Colaborador.</p>
            <?php endif; ?>
 
        <br><br><br><br>
        <!-- Link para logout -->
        <a href="index.php?action=logout" class="btn">Logout</a>
    </div>

</body>
</html>
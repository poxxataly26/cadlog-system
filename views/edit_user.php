<!DOCTYPE html>
<html lang="pt-br">
 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Usuário</title>
<link rel="stylesheet" href="css/edit.css">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body.edit-body {
    background-image: linear-gradient(to right, rgb(81, 185, 255), black);
    font-family: 'Arial', sans-serif;
    background-color: #f4f7fc;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.edit-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    text-align: center;
}
.edit-container h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}
.edit-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.edit-form label {
    font-size: 14px;
    color: #555;
    text-align: left;
    margin-bottom: 5px;
    font-weight: bold;
}
.edit-form input[type="text"],
.edit-form input[type="email"],
.edit-form select {
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 15px;
    outline: none;
    transition: border-color 0.3s ease;
}
.edit-form input[type="text"]:focus,
.edit-form input[type="email"]:focus,
.edit-form select:focus {
    border-color: #4A90E2;
}
.edit-form .btn {
    padding: 12px;
    background-color: #4A90E2;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.edit-form .btn:hover {
    background-color: #357ABD;
}
.back-link {
    display: inline-block;
    margin-top: 20px;
    color: #4A90E2;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.3s ease;
}
.back-link:hover {
    color: #357ABD;
}
</style>
</head>
 
<body class="edit-body">
    <div class="edit-container">
        <h2>Editar Usuário</h2>
        <form method="post" action="index.php?action=edit&id=<?= $user['id']?>" class="edit-form">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= $user['nome']?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $user['email']?>" required>
 
        <label for="perfil">Perfil:</label>
        <select name="perfil" id="perfil">
            <option value="admin" <?= $user['perfil'] == 'admin' ? 'selected' : '' ?>>Admin</option>
            <option value="gestor" <?= $user['perfil'] == 'gestor' ? 'selected' : '' ?>>Gestor</option>
            <option value="colaborador" <?= $user['perfil'] == 'colaborador' ? 'selected' : '' ?>>Colaborador</option>
        </select> 

        <button type="submit" class="btn">Salvar</button>     
</form>
<a href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
</div>
</body>
 
</html>  
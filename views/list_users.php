<?php
session_start();

if (isset($_SESSION['perfil'])) :
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Usuários</title>
        <link rel="stylesheet" type="text/css" media="screen" href=""> <!-- Link para o arquivo CSS -->
    <style>
body {
    background-image: linear-gradient(to right, #fff, black);
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    justify-content: center;  
    align-items: center;      
    height: 100vh;
}
.container {
    max-width: 800px;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
h2 {
    text-align: center;
    color: #333;
}
.styled-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-size: 0.9em;
    background-color: #f8f8f8;
}
.styled-table thead tr {
    background-color: black;
    color: #ffffff;
    text-align: left;
}
.styled-table th, .styled-table td {
    padding: 10px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}
.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}
.styled-table tbody tr:hover {
    background-color: #f1f1f1;
}
.btn {
    display: inline-block;
    background-color: black;
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
    margin-top: 20px;
}
.btn:hover {
    background-color: #D3D3D3;
}
    </style>
    </head>

    <body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
        <div class="container">
            <h2>Lista de Usuários</h2>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td> <?= $user['id'] ?> </td>
                            <td> <?= $user['nome'] ?> </td>
                            <td> <?= $user['email'] ?> </td>
                            <td> <?= $user['perfil'] ?> </td>
                            <td>
                                <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor') : ?>
                                    <a href="">Editar</a>
                                <?php endif; ?>

                                <?php if ($_SESSION['perfil'] == 'admin') : ?>
                                    <a href="">Excluir</a>
                                <?php endif; ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>

            <a href="" class="btn">Voltar ao Dashboard</a>
        </div>

    </body>

    </html>

<?php else : ?>
    <p>erro: voce não tem permissão para visualizar esta pagina</p>
<?php endif; ?>
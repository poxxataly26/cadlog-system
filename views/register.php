<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body {
    background-image: linear-gradient(to right, rgb(110, 255, 219), black);
    font-family: Arial, sans-serif;
    background-color: #000000;
}
div {
    text-align: center;
}
form {
  display: inline-block;
  max-width: 300px;
  margin: 40px auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border: 1px solid rgb(8, 8, 8);
}
label {
  display: 40px;
  margin-bottom: 20px;
  margin-right: 180px;
}
input {
  width: 100%;
  height: 30px;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
}
select {
  width: 100%;
  height: 40px;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
}
button {
  background-color: #000000;
  color: rgb(255, 255, 255);
  padding: 10px 20px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}
button:hover {
  background-color: #46adad;
}
a {
  display: block;
  margin-top: 20px;
  text-decoration: none;
  color: #000000;
}
a:hover {
  color: #057f65;
}
h2 {
  margin-top: 0;
  font-weight: bold;
  color: rgb(0, 0, 0);
  margin-top: 30px;
}
  </style>

    <title>Cadastre-se</title>

</head>
<body>
    <div>
        <h2>Cadastro de usuário</h2>
        <form action="index.php?action=register" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <label for="perfil">Perfil</label>

            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>
            
            <button type="submit">Cadastrar</button>
        </form>
        <a href="index.php?action=login">Voltar ao Login</a>
        
    </div>
</body>
</html>
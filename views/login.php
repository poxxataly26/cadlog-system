<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <style>
body{
    background-image: linear-gradient(to right, rgb(81, 185, 255), black);
    margin: 0;
    padding: 0%;
    font-family: Arial, sans-serif;
    background-color: #181616;
  
}
main{
    max-width: 400px;
    margin: 150px auto;
    padding: 20px;
    background-color: rgb(96, 181, 221);
    border: 1px solid rgb(8, 8, 8);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
form{
    display: flex;
    flex-direction: column;
    align-items: center;
}
section{
    margin-bottom: 20px;
}
label{
    display: block;
    margin-bottom: 10px;
    color: #333;
}
input{
    width: 100%;
    height: 10px;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid rgb(0, 0, 0);
    border-radius: 5px;
}
input{
    border-color: #66d9ef; 
    box-shadow: 0 0 10px rgba(102, 217, 239, 0.5);
}
button{
    background-color: #000000; 
    color: rgb(255, 255, 255);
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
button:hover {
    background-color: #588ec5; 
}
a{
    text-decoration: none;
    color: #000000;
}
a:hover {
    color: #042f5e; 
}

    </style>

        <title>Login</title>
</head>
<body>
    <main>
        <form action="index.php?action=login" method="post">
            <section>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
            </section>
            <section>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </section>
            <button type="submit">Login</button>
        </form>
        <a href="index.php?action=register">Cadastre-se</a>
    </main>
</body>
</html>
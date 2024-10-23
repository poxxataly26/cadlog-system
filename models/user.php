<?php
 
// Inclue o arquivo de conexão que contem a classe Detabase para gerenciar a conexão com o Bd
require_once 'models/database.php';
 
class User
{
    // Função para encontrar um usuário pelo email
    public static function findByEmail($email){
        // Coleta a coneção com o BD
        $conn = Database::getConnection();
 
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
 
        // executa a consulta com o e-mail pasado como parâmetro
        $stmt->execute(['email' => $email]);
 
        // Retone os dados do usuário encontrado como um array associado
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
    static public function find($id){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
    // Função para criar um novo usuário no banco de dados
    static public function create($data){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        $stmt->execute($data);
    }
    // função para buscar todos os usuario da base de dados 
    public static function all(){
        $conn = Database::getConnection();
        $stmt = $conn->query("SELECT * FROM usuarios");
        // retorna todos os usuarios com um array associativo
        return $stmt->fetchAll (PDO::FETCH_ASSOC);
    }
    // função responsável pela atualização dos dados dos usuarios na base de dados 
    public static function update($id, $data){
        $conn = Database::getConnection();
        // prepara uma consulta SQL para atualizar, nome, email e perfil com base no ID do usuario 
        $stmt = $conn->prepare("UPDATE usuarios SET nome = :nome, email = :email, perfil = :perfil WHERE id = :id");

        $data['id'] = $id;

        $stmt->execute($data);
    }
    // função para excluir o usuario da base de dados pelo ID 
    public static function delete ($id){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}

?>

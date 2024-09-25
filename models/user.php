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
 
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
 
}
 
?>

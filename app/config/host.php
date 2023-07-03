<?php
class Conexao{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'email_marketing';
    private $conn;

    public function connect(){
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8mb4";

        try{
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }
}

// $conectiones = new Conexao();
// echo $conectiones->connect();
?>
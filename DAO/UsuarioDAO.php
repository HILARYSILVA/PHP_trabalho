<?php
class Usuario_DAO
{
 
    private $conexao;

    function __construct() 
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


    
    function insert(Usuario_Model $model) 
    {
        
        $sql = "INSERT INTO usuario
                (nome, senha) 
                VALUES (?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->usuario);
        $stmt->execute();      

    }

    public function update(Usuario_Model $model)
    {
        $sql = "UPDATE usuario SET nome=?, senha=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->senha);
        $stmt->bindValue(3, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM usuario";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    } 

    public function selectById(int $id)
    {
        include_once 'Model/Usuario_Model.php';

        $sql = "SELECT * FROM usuario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("Usuario_Model"); 
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM usuario WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}

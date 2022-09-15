<?php

class Usuario_Model
{
   
    public $id, $nome, $senha;
   
    
    public $rows;

   
    public function save()
    {
        include 'DAO/UsuarioDAO.php';

        $dao = new Usuario_DAO();

        if(empty($this->id))
        {
           
            $dao->insert($this);
        } 
        else 
        {
            $dao->update($this);
      
        }
    }
        public function getAllRows()
        {
            include 'DAO/UsuarioDAO.php';
            $dao = new Usuario_DAO();
            $this->rows = $dao->select();
        }


        public function getById(int $id)
        {
            include 'DAO/UsuarioDAO.php';

            $dao = new Usuario_DAO();

            $obj = $dao->selectById($id);

            return ($obj) ? $obj : new Usuario_Model();
        }

        public function delete(int $id)
    {
        include 'DAO/UsuarioDAO.php'; 

        $dao = new Usuario_DAO();

        $dao->delete($id);
    }

    }
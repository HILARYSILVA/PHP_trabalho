<?php

class PersonagensModel
{
   
    public $id, $nome, $qualidades, $hobby;
   
    
    public $rows;

   
    public function save()
    {
        include 'DAO/PersonagensDAO.php';

        $dao = new PersonagensDAO();

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
            include 'DAO/PersonagensDAO.php';
            $dao = new PersonagensDAO();
            $this->rows = $dao->select();
        }


        public function getById(int $id)
        {
            include 'DAO/PersonagensDAO.php';

            $dao = new PersonagensDAO();

            $obj = $dao->selectById($id);

            return ($obj) ? $obj : new PersonagensModel();
        }

        public function delete(int $id)
    {
        include 'DAO/PersonagensDAO.php'; 

        $dao = new PersonagensDAO();

        $dao->delete($id);
    }

    }
<?php


class PersonagensController 
{

    public static function index() 
    {
        include 'Model/PersonagensModel.php'; 
        
       
        $model = new PersonagensModel();
        $model->getAllRows();
        include 'View/modules/Personagens/ListaPersonagens.php';
    }

    
    public static function form()
    {
        include 'Model/PersonagensModel.php'; 
        $model = new PersonagensModel();
      
        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Personagens/FormPersonagens.php';
    }


    public static function save() {

        include 'Model/PersonagensModel.php'; 
        $Personagens = new PersonagensModel();
        $Personagens->id = $_POST['id'];
        $Personagens->nome = $_POST['nome'];
        $Personagens->qualidades = $_POST['qualidades'];
        $Personagens->hobby = $_POST['hobby'];

        $Personagens->save();  

        header("Location: /Personagens"); 
    }

    public static function delete()
    {
        include 'Model/PersonagensModel.php'; 

        $model = new PersonagensModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Personagens"); 
    }

}
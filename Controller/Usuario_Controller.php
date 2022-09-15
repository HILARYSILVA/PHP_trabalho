<?php


class Usuario_Controller 
{

    public static function index() 
    {
        include 'Model/UsuarioModel.php'; 
        
       
        $model = new Usuario_Model();
        $model->getAllRows();
        include 'View/modules/Usuario/Lista_Usuario.php';
    }

    
    public static function form()
    {
        include 'Model/UsuarioModel.php';
        $model = new Usuario_Model();
      
        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
        include 'View/modules/Usuario/FormUsuario.php';
    }


    public static function save() {

        include 'Model/UsuarioModel.php'; 
        $Usuario = new Usuario_Model();
        $Usuario->id = $_POST['id'];
        $Usuario->nome = $_POST['nome'];
        $Usuario->senha = $_POST['senha'];
      
        $Usuario->save();  

        header("Location: /Usuario"); 
    }

    public static function delete()
    {
        include 'Model/UsuarioModel.php'; 

        $model = new Usuario_Model();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Usuario"); 
    }

}
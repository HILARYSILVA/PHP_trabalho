<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $uri_parse;
//echo "<hr />";

include 'Controller/PersonagensController.php';
include 'Controller/Usuario_Controller.php';
switch ($uri_parse) 
{
      case '/Personagens':
            PersonagensController::index();
            break;

      case '/Personagens/form':
            PersonagensController::form();
            break;

      case '/Personagens/save':
            PersonagensController::save();
            break;

      case '/Personagens/delete':
            PersonagensController::delete();
            break;


      case '/Usuario':
           Usuario_Controller::index();
            break;

      case '/Usuario/form':
           Usuario_Controller::form();
            break;

      case '/Usuario/save':
            Usuario_Controller::save();
            break;

      case '/Usuario/delete':
            Usuario_Controller::delete();
            break;
      }
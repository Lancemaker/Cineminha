<?php
namespace controllers;
class ProdutosController{
public $login;
function init(){           
        include'./view/templates/cadastro.php';  
        //$this->login = new LoginController();              
    }
}
ProdutosController::init();
?>
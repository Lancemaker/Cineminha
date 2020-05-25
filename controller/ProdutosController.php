<?php
namespace controllers;
class ProdutosController{
public $login;
function init(){           
        include'./view/templates/cadastroProduto.php';  
        //$this->login = new LoginController();              
    }
}
ProdutosController::init();
?>
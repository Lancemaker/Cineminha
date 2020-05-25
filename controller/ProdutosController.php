<?php
namespace controllers;
class ProdutosController{
public $login;
function init(){
        if($_SESSION['logado']){
            include'./view/templates/cadastroProduto.php'; 
            return;
        }          
            include'./view/templates/login.php'; 
            
        //$this->login = new LoginController();              
    }
}
ProdutosController::init();
?>
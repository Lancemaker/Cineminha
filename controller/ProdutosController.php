<?php
namespace controllers;
class ProdutosController{
public $login;
public $teste;
function init(){
    
        
        if($_SESSION['logado']){
            include'./view/templates/cadastroProduto.php'; 
            return;
        }          
            echo "<div class='alert alert-danger mt-4 text-center'> Acesso Negado </div>";
            echo "<br>";
            include'./view/templates/login.php'; 

        //$this->login = new LoginController();              
        }
}
ProdutosController::init();
?>
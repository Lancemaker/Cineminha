<?php
namespace controllers;
include'./model/Usuario.php';
use models\Usuario as User;


class LoginController{   
    public $user,$login,$pass;

    function __construct() {                       
        $this->user = new User();
        if(count($_POST)>0){
        $this->setSession($_POST);
        print_r($this->getsession());

        }
        
    }   
    
    function getSession(){
        if(isset($_SESSION['nome'])) return $_SESSION;
        return 'usuario não logado';
    }
    function setSession($value){
        $_SESSION["nome"]=$value['nome'];
        $_SESSION["email"]=$value['email'];
        $_SESSION["pass"]=$value['pass'];
        $_SESSION["data"]=$value['date'];
        $_SESSION["sexM"]=$value['sexM'];
        $_SESSION["sexF"]=$value['sexF'];
        $_SESSION["tel"]=$value['tel'];
        $_SESSION["cel"]=$value['cel'];
        $_SESSION["end"]=$value['endereco'];
        $_SESSION["msg"]=$value['msg'];      
    }    
    function checaLogin($login,$pass){
        if($login == $_SESSION["email"] && $pass == $_SESSION['pass']){
            return true;
        }
            return false;
    }
}
?>
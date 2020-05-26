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
        $this->user->montaUsuario($value);      
    }    
    function checaLogin($login,$pass){
        if($login == $_SESSION["email"] && $pass == $_SESSION['pass']){
            return true;
        }
        echo "<div class='alert alert-danger mt-4 text-center'>Usuário inválido </div>";
            return false;
    }    
}
?>
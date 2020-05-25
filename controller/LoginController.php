<?php
namespace controllers;
include'./model/Usuario.php';
use models\Usuario as User;


class LoginController{   
    public $user,$login,$pass;

    function __construct() {
        session_start();
        
        $this->user = new User();
        $this->setSession($_POST['nome']);
        print_r($this->getsession());
    }   
    
    function getSession(){
        if(isset($_SESSION['nome'])) return $_SESSION["nome"];
        return 'usuario não logado';
    }
    function setSession($value){
        $_SESSION["user"]=$value;
    }    
}
?>
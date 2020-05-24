<?php
namespace controllers;
include'./model/Usuario.php';
use models\Usuario as User;


class LoginController{   
    public $user,$login,$pass;

    function __construct() {
        session_start();
        $this->user = new User();
        echo 'sessão criada';
    }   
    
    function getSession(){
        return $_SESSION["login"];
    }
    function setSession($value){
        $_SESSION["login"]=$value;
    }    
}
?>
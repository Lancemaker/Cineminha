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
        }
    }    
    function getSession(){
        if($_SESSION['nome']) return $_SESSION;
        return 'usuario não logado';
    }
    function setSession($value){
        $this->user->montaUsuario($value);      
    }    
    function checaLogin($login,$pass){
        $servidor = "localhost";
        $usuario = "gil";
        $senhabd = "123mudar";
        $dbname = "cineminha";

        //Criar conexão
        $conn= mysqli_connect($servidor, $usuario, $senhabd, $dbname);
 
        $result_usuario =  "SELECT * from usuario WHERE email = '$login'";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $dados = mysqli_fetch_array($resultado_usuario);
        print_r($dados);
        $_SESSION['nome'] = $dados['nome'];
        return true;

        // if($login == $_SESSION["email"] && $pass == $_SESSION['pass']){
        //     return true;
        // }
        // echo "<div class='alert alert-danger mt-4 text-center'>Usuário inválido </div>";
        //     return false;
    }    
}
?>
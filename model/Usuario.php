<?php
namespace models;

class Usuario {

    function __construct(){}

    public $nome;
    public $email;
    public $confirmarEmail;
    public $senha;
    public $confirmarSenha;
    public $dataNascimento;
    public $sexM;
    public $sexF;
    public $telefone;
    public $celular;
    public $endereco;
    public $mensagem;


    public function montaUsuario($arr){

        $this->nome=$arr['nome'];
        $this->email=$arr['email'];
        $this->confirmarEmail=$arr['pass'];
        $this->senha=$arr['pass'];
        $this->confirmarSenha=$arr['date'];
        $this->dataNascimento=$arr['tel'];
        $this->sexM=$arr['sexF'];
        $this->sexF=$arr['sexM'];
        $this->telefone=$arr['tel'];
        $this->celular=$arr['cel'];
        $this->endereco=$arr['endereco'];
        $this->mensagem=$arr['msg'];

        $_SESSION["nome"]=$arr['nome'];
        $_SESSION["email"]=$arr['email'];
        $_SESSION["pass"]=$arr['pass'];
        $_SESSION["data"]=$arr['date'];
        $_SESSION["sexM"]=$arr['sexM'];
        $_SESSION["sexF"]=$arr['sexF'];
        $_SESSION["tel"]=$arr['tel'];
        $_SESSION["cel"]=$arr['cel'];
        $_SESSION["end"]=$arr['endereco'];
        $_SESSION["msg"]=$arr['msg'];   
    }
};
?>
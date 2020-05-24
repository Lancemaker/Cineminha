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
    public $sexo;
    public $telefone;
    public $celular;
    public $endereco;
    public $mensagem;


    public function montaUsuario($nome,$email,$senha,$dataNascimento,$sexo,$telefone,$celular,$endereco,$mensagem){

         $usuarioMontado = array($nome + $email + $senha + $dataNascimento + $sexo + $telefone + $celular + $endereco + $mensagem);

         return $usuarioMontado;
    }

    public function valida($email, $confirmarEmail, $senha, $confirmarSenha){

        if($email == $confirmarEmail){

            return $email;

        }else if ($senha == $confirmarSenha){

            return $senha;
        }else {
            $email = null;
            $senha = null;
        }
    }

};
?>
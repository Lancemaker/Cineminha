<?php
namespace models;

class Usuario {
   public $servidor = "localhost";
   public $usuario = "gil";
   public $senhabd = "123mudar";
   public $dbname = "cineminha";

    //Criar conexão
    public $conn; 

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


    public function montaUsuario($arr){

        $this->nome=$arr['nome'];
        $this->email=$arr['email'];
        $this->confirmarEmail=$arr['pass'];
        $this->senha=$arr['pass'];
        $this->dataNascimento=$arr['dataNascimento'];
        $this->sexo=$arr['sexo'];
        $this->telefone=$arr['tel'];
        $this->celular=$arr['cel'];
        $this->endereco=$arr['endereco'];
        $this->mensagem=$arr['msg'];

        $_SESSION["nome"]=$arr['nome'];
        $_SESSION["email"]=$arr['email'];
        $_SESSION["pass"]=$arr['pass'];
        $_SESSION["data"]=$arr['dataNascimento'];
        $_SESSION["sexo"]=$arr['sexo'];
        $_SESSION["tel"]=$arr['tel'];
        $_SESSION["cel"]=$arr['cel'];
        $_SESSION["end"]=$arr['endereco'];
        $_SESSION["msg"]=$arr['msg'];   

        $this->conn= mysqli_connect($this->servidor, $this->usuario, $this->senhabd, $this->dbname);
        //print_r($this->conn);

        $resulta_usuario = "INSERT INTO usuario (nome, email, senha, dataNascimento, sexo, telefone, celular, endereco, mensagem) values ('$this->nome', '$this->email','$this->senha','$this->dataNascimento','$this->sexo','$this->telefone','$this->celular','$this->endereco','$this->mensagem')";
        $resultado_usuario = mysqli_query($this->conn, $resulta_usuario);

        if ($resultado_usuario) {
            $numeroregistros = mysqli_affected_rows($this->conn);
            echo "Comando executado com sucesso";
        } else {
            echo "Falha ao executar comando";
        }
        mysqli_close($this->conn);
    }
  
};
?>
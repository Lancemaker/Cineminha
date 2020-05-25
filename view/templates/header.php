<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cineminha</title>
  <link rel="shortcut icon" href="../assets/thumbs/icone.svg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="view/css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-xl">
        <a class="navbar-brand" href="/index.php">Cineminha</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07XL" style="margin-left: 21%;">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=templates/horarios">Horários</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=templates/institucional">Institucional</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=controller/ProdutosController">Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=templates/sobrenos">Sobre Nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=templates/login"><u> Login/Cadastro</u></a>
            </li>
            <div class="icon-login">
              <img src="assets/thumbs/person.svg" height="30" width="30" style="margin-right: 13px">
            </div>
            <div style="margin-left: 20px">
              <?php
              if(isset($_SESSION['logado'])){
                print_r($_SESSION['nome']);
                echo'<form name="myform" action="" method="post">              
                <input type="hidden" name="metodo" value="logout"/>
                <input type="submit" value=logout class="btn-login btn-produto" style="margin-left: 214px">
                </form>'; 
              }
              ?>
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </header>
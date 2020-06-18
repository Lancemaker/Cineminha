<?php

$servidor = "localhost";
$usuario = "gil";
$senhabd = "123mudar";
$dbname = "cineminha";

        //Criar conexão
        $conn= mysqli_connect($servidor, $usuario, $senhabd, $dbname);

    $sqlselect2 = "SELECT id,nome,descricao,quantidade,preco*quantidade as preco FROM produtos";
    $resultadoselect2 = mysqli_query($conn, $sqlselect2);
?>
		<dl>
  			<dt>Controle de estoque</dt>
		</dl>
<table class="table">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Preço</th>
      <th scope="col">Alterar quantidade</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
    <?php
    if ($resultadoselect2) {
        while ($registro2 = mysqli_fetch_array($resultadoselect2)) {
            echo "<tr>";
            echo "<td>" . $registro2["nome"] . "</td>";
            echo "<td>" . $registro2["descricao"] . "</td>";
            echo "<td>" . $registro2["quantidade"] . "</td>";
	        echo "<td>" . $registro2["preco"] . "</td>";
            echo "<td><form name='altera' method='post'><input type='number'  name='nome' ><input type='submit' name='altera' id='altera' value='" . $registro2["id"] . "'></td></form>";
            echo "<td><form name='exclui' method='post'><input type='submit' name='exclui' id='exclui' value='" . $registro2["id"] . "'</td></form>";
        } echo "</tr>";
    }
    echo "</table>";
    if (isset($_POST['altera'])) {
        $cod = $_POST['altera'];
	    $qnt = $_POST['nome'];
        $sql2 = "UPDATE produtos set quantidade = '$qnt' WHERE id = '$cod'";
        $resultado2 = mysqli_query($conn, $sql2);
        if ($resultado2) {
            echo "<p><center> Emprestimo Aprovado </center></p>";
            echo "<script>window.location='index.php?page=templates/cadastroProduto_old'</script>";
        } else {
            echo "Falha ao executar comando $cod";
        }
    }
if (isset($_POST['exclui'])) {
        $cod = $_POST['exclui'];
        $sql2 = "DELETE FROM produtos WHERE id = '$cod'";
        $resultado2 = mysqli_query($conn, $sql2);
        if ($resultado2) {
            echo "<p><center> Produto </center></p>";
            echo "<script>window.location='index.php?page=templates/cadastroProduto_old'</script>";
        } else {
            echo "Falha ao executar comando $cod";
        }
    }

?>
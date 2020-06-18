<?php

if( ! session_id() ) {
	session_start();
}

//print_r($_POST);
function calculateProductsValue( $product ) {
	$price = (float) $product['price'];
	$quantity = (int) $product['quantity'];

	return $price * $quantity;
}

function tofloat($num) {
    $dotPos = strrpos($num, '.');
    $commaPos = strrpos($num, ',');
    $sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos :
        ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);
  
    if (!$sep) {
        return floatval(preg_replace("/[^0-9]/", "", $num));
    }

    return floatval(
        preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
        preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num)))
    );
}

function calculateTotal( $products, $formatted = false ) {
	$total = 0;

	foreach( $products as $product ) {
		$final_price = strtr( $product['final_price'], ['R$' => '', ' ' => ''] );
		$final_price = tofloat( $final_price );

		$total += $final_price;
	}

	if( $formatted ) {
		return 'R$ ' . number_format( $total, 2, ',', '.' );
	}

	return $total;
}

if( ! empty( $_POST ) ) {
	$products = json_decode( $_POST['Products'], true );

	$_SESSION['Products'] = array_map( function( $product ) {
		$final_price = calculateProductsValue( $product );

		return [
			'name' => $product['name'],
			'description' => $product['description'],
			'quantity' => $product['quantity'],
			'final_price' => 'R$ ' . number_format( $final_price, 2, ',', '.' )
		];
	}, $products );

	$servidor = "localhost";
	$usuario = "gil";
	$senhabd = "123mudar";
	$dbname = "cineminha";

        //Criar conexão
		$conn= mysqli_connect($servidor, $usuario, $senhabd, $dbname);
		$products = json_decode( $_POST['Products'], true );
		
		for ($i=0; $i < count($products); $i++) { 
			$result_produto = "INSERT INTO produtos (nome,descricao,quantidade,preco) values ("."'".$products[$i]["name"]."'".","."'".$products[$i]["description"]."'".","."'".$products[$i]["quantity"]."'".","."'".$products[$i]["price"]."'".")";
			$resultado_produto = mysqli_query($conn, $result_produto);
		}
		
		if ($result_produto) {
			$numeroregistros = mysqli_affected_rows($conn);
			echo "<script>window.location='index.php?page=templates/cadastroProduto_old'</script>";
		} else {
			echo "Falha ao executar comando";
		}
		mysqli_close($conn);
	}

if( ! empty( $_SESSION['Products'] ) ) {
	$_SESSION['ProductsTotal'] = calculateTotal( $_SESSION['Products'], true );

	include_once( 'view/templates/Cart.php' );
	die;
}



die( 'Arquivo não pode ser acessado diretamente' );


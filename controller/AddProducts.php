<?php

if( ! session_id() ) {
	session_start();
}

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
}

if( ! empty( $_SESSION['Products'] ) ) {
	$_SESSION['ProductsTotal'] = calculateTotal( $_SESSION['Products'], true );

	include_once( 'view/templates/Cart.php' );
	die;
}

die( 'Arquivo não pode ser acessado diretamente' );


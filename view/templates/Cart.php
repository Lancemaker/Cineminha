<?php

if( ! isset( $_SESSION ) ) {
	die( 'Este arquivo não pode ser acessado diretamente' );
}

?>

<html>
	<head>
		<meta charset="UTF-8"></html>
		<title>Carrinho</title>
	</head>
	<body>
		<h1>
			Estamos no nosso último passo!
		</h1>
		<h2>
			Aqui você poderá confirmar os produtos selecionados e o preço total!
		</h2>
		
		<table>
			<thead>
				<tr>
					<td>
						Produto escolhido
					</td>
					<td>
						Descrição
					</td>
					<td>
						Preço
					</td>
					<td>
						Quantidade
					</td>
					<td>
						Total
					</td>
				</tr>
			</thead>
			<tbody>
		<?php foreach( $_SESSION['Products'] as $index => $product ) : ?>
				<tr>
					<td>
						<?= $product['name'] ?>
					</td>
					<td>
						<?= $product['description'] ?>
					</td>
					<td>
						<?= $product['final_price'] ?>
					</td>
					<td>
						<?= $product['quantity'] ?>
					</td>
					<td>
						<!-- Total -->
					</td>
				</tr>
		<?php endforeach ?>
				<tr>
					<td>
						Total
					</td>
					<td>
						-
					</td>
					<td>
						-
					</td>
					<td>
						<strong>
							<?= $_SESSION['ProductsTotal'] ?>
						<strong>
					</td>					
				</tr>
			</tbody>
		</table>
	</body>
</html>

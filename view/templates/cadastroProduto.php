<html>
	<head>
		<meta charset="UTF-8"></html>
		<title>Adicinar produto ao carrinho</title>
	</head>
	<body>
		<?php include_once 'Products.php' ?>
		<h1>
			Olá, logo abaixo você poderá escolher o produto que deseja comprar!
		</h1>

		<?php
			if( ! empty( $products ) && is_array( $products ) && $products ) : ?>
				<table>
					<thead>
						<tr>
							<td>
								Nome do produto
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
						</tr>
					</thead>
					<tbody>
				<?php
					foreach( $products as $product ) : ?>
						<tr>
							<td class="product-name">
								<?= $product['name'] ?>
							</td>
							<td class="product-description">
								<?= $product['description'] ?>
							</td>
							<td class="product-price">
								<?= $product['price'] ?>
							</td>
							<td>
								<input type="number" name="Quantity" min="0" />
							</td>
						</tr>
				<?php 
				endforeach
				?>
					</tbody>
				</table>
			<?php 
			else :
				echo '<h2>Ops ... Não conseguimos carregar os produtos</h2>';
			endif
		?>

		<form method="POST" action="index.php?page=controller/AddProducts" id="formAddProducts">
			<input type="hidden" name="Products" />
			<button type="submit">Adicionar ao carrinho</button>
		</form>
		<a href=""></a>
		<!-- Scripts do projeto -->
		<script
		  src="https://code.jquery.com/jquery-3.5.1.min.js"
		  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		  crossorigin="anonymous"></script>

	  	<script src="/view/templates/Assets/addProductsToForm.js"></script>
	</body>
</html>

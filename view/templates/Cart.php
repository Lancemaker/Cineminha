<?php

if( ! isset( $_SESSION ) ) {
	die( 'Este arquivo não pode ser acessado diretamente' );
}

?>
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
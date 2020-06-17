<?php

if( ! isset( $_SESSION ) ) {
	die( 'Este arquivo não pode ser acessado diretamente' );
}

?>		
		<dl>
  			<dt>Produtos</dt>
  			<dd>Adicinar produto ao carrinho</dd>
		</dl>
		<?php include_once 'Products.php' ?>
		<?php
			if( ! empty( $products ) && is_array( $products ) && $products ) : ?>
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Nome do Produto</th>
      						<th scope="col">Descrição</th>
      						<th scope="col">Preço</th>
      						<th scope="col">Quantidade</th>
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

		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nome do Produto</th>
      				<th scope="col">Descrição</th>
      				<th scope="col">Preço</th>
      				<th scope="col">Quantidade</th>
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
					<th>
						Total
					</th>
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
		<div>
			<a href="index.php?page=controller/ProdutosController" style='color:red;'>Delete</a>
		</div>

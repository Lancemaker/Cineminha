<div class="container-cadastro">
    <fieldset class="formulario" style="width: 30%; margin:0 auto">
        <div class="formulario-interno">
            <h1 class=title-cadastro>Cadastro de Produtos</h1>
            <label class="label-cadastro" for="nome produto">Produto<br>
                <input class="input-text" type="text" name="nmProduto" placeholder="Picoca" width="50%" />
            </label>
            <br>
            <label class="label-cadastro" for="valor produto">Valor - R$<br>
                <input class="input-text" type="text" name="vrProduto" placeholder="R$ 0,00" width="50%" />
            </label>
            <br>
            <label class="label-cadastro" for="valor produto">Descrição produto<br>
                <input class="input-text" type="text" name="dsProduto" placeholder="pipoca com manteiga..." width="50%" />
            </label>
            <br>
            
             <input type="button" id="signin" class="btn-login btn-second cadastro" style="margin-top: 25px; margin-left: 91px" onclick="location.href='http://localhost/index.php?page=main';" value="Cadastrar" />
        </div>
        <script src="jquery.js" type="text/javascript"></script>
        <script src="jquery.maskedinput.js" type="text/javascript"></script>

    </fieldset>

</div>
<script src="view/js/main.js"></script>
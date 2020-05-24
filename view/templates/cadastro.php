<div class="container-cadastro">
    
        <div class="formulario-interno">
            <h1 class=title-cadastro style="width: 42%; margin:0 auto">Cadastro de Produtos/Serviços</h1>
            <br>
            <div style="width: 30%; margin:0 auto">
                <label class="label-cadastro" for="nome produto" style="text-align:center">Produtos/Serviços<br>
                </label>
            </div>
            <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div>
                <img src="assets/thumbs/dbox.jpg" alt="dbox" width="350" style="display:block; margin-left: auto; margin-right: auto;">
                <input type="checkbox" id="dbox" name="DBOX" style="margin-left: 37%">
                <label for="DBOX">DBOX</label>
            </div>
            <div>
                <img src="assets/thumbs/xd.png" alt="xd" width="350" style="display:block; margin-left: auto; margin-right: auto;">
                <input type="checkbox" id="xd" name="XD" style="margin-left: 37%">
                <label for="XD">XD</label>
            </div>
            <div>
                <img src="assets/thumbs/pipoca.jpg" alt="pipoca" width="350" style="display:block; margin-left: auto; margin-right: auto;">
                <input type="checkbox" id="pipoca" name="pipoca" style="margin-left: 37%">
                <label for="pipoca">Pipoca</label>
            </div>
            </div>
            <div style="width: 25%; margin:0 auto">
                 <input type="button" id="signin" class="btn-login btn-second cadastro"  
                 style="margin-top: 25px; margin-left: 91px" onclick="location.href='http://localhost/index.php?page=main';" value="Cadastrar" />
            </div>
            
            <br>    
        </div>
        <script src="jquery.js" type="text/javascript"></script>
        <script src="jquery.maskedinput.js" type="text/javascript"></script>
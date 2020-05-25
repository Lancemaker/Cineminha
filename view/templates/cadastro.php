<div class="container-cadastro">

    <div class="formulario-interno">
        <h1 class=title-cadastro style="width: 42%; margin:0 auto">Cadastro de Produtos/Serviços</h1>
        <br>
        <div style="width: 30%; margin:0 auto">
            <label class="label-cadastro" for="nome produto" style="text-align:center">Produtos/Serviços<br>
            </label>
        </div>
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <form id="produtoForm" class="form" style="margin: 0 auto">
                <div>
                    <img src="assets/thumbs/dbox.jpg" alt="dbox" width="350" style="display:block; margin-left: auto; margin-right: auto;">
                    <input type="checkbox" id="dbox" name="dbox">
                    <label for="dbox">DBOX</label>
                </div>
                <div>
                    <img src="assets/thumbs/xd.png" alt="xd" width="350" style="display:block; margin-left: auto; margin-right: auto;">
                    <input type="checkbox" id="xd" name="xd" style="margin-left: 37%">
                    <label for="xd">XD</label>
                </div>
                <div>
                    <img src="assets/thumbs/pipoca.jpg" alt="pipoca" width="350" style="display:block; margin-left: auto; margin-right: auto;">
                    <input type="checkbox" id="pipoca" name="pipoca" style="margin-left: 37%">
                    <label for="pipoca">Pipoca</label>

                </div>

                <div style="width: 150px; margin:0 auto">
                    <input type="button" id="signin" class="btn-login btn-second cadastro" style="margin-top: 25px;" onclick="post('', arr)" value="Cadastrar" />
                </div>
                </form>
        </div>

       
        <br>
    </div>
    <script src="jquery.js" type="text/javascript"></script>
    <script src="jquery.maskedinput.js" type="text/javascript"></script>

    <script>
        function post(path, params, method = 'post') {
            arr = {
                dbox,
                xd,
                pipoca
            };
            // The rest of this code assumes you are not using a library.
            // It can be made less wordy if you use one.
            var xhr = new XMLHttpRequest();
            xhr.open("POST", 'http://localhost:8080/index.php?page=templates/cadastro', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.send(JSON.stringify({
                dbox: params[0],
                xd: params[1],
                pipoca: params[2]

            }));
        }
    </script>
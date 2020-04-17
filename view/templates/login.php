<div class="container">
    <!-- Primeiro Conteudo-->
    <div class="content primeiro-conteudo">
        <!-- Primeira Coluna-->
        <div class="primeira-coluna">
            <h2 class="title title-primary">Bem-Vindo!</h2>
            <p class="descricao descricao-primary">Para manter-se conectado conosco</p>
            <p class="descricao descricao-primary">faça o login com suas informações pessoais</p>
            <button id="signin" class="btn-login btn-primary">sign in</button>
        </div>
        <!-- Segunda Coluna-->
        <div class="segunda-coluna">
            <div class="exit">
                <a href="index.php?page=main">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <h2 class="title title-second">Criar Conta</h2>
            <form id="cadastroForm" class="form">
                <label class="label-input " for="">
                    <i class="far fa-user icon-modify" style="padding: 5px"></i>
                    <input type="text" placeholder="Nome" id="nome">
                </label>

                <label class="label-input" for="">
                    <i class="far fa-envelope icon-modify" style="padding: 5px"></i>
                    <input type="email" placeholder="Email" id="email">
                </label>

                <label class="label-input" for="">
                    <i class="fas fa-lock icon-modify" style="padding: 5px"></i>
                    <input type="password" placeholder="Senha" id="pass">
                </label>

                <label class="label-input" for="">
                    <i class="fas fa-lock icon-modify" style="padding: 5px"></i>
                    <input type="password" placeholder="Repita a senha" id="pass2">
                </label>

                <label class="label-input" for="">
                    <i class="fas fa-calendar icon-modify" style="padding: 5px"></i>
                    <input oninput="mascara(this, 'data')" class="input-text" type="date" name="dataNascimento" placeholder="DD/MM/AAAA" width="50%" id="datanascimento" id="data"/>
                </label>

                <label class="label-input-radio">
                    <p>Qual o seu sexo?</p>
                    <div class='male'>
                      <input type="radio" name="sexo" value="M" id="sexM">
                      <p style="text-align: center">Masculino</p>
                    </div>
                    <div class="female">
                      <input type="radio" name="sexo" value="F" id="sexF">
                      <p style="text-align: center">Feminino</p>
                    </div>
                </label>

                <label class="label-input" for="">
                    <i class="fas fa-phone icon-modify" style="padding: 5px"></i>
                    <input oninput="mascara(this, 'tel')" class="input-text" type="text" placeholder="XXXX-XXXX" id="telfixo"/>
                </label>
                <label class="label-input" for="">
                    <i class="fas fa-mobile-alt icon-modify" style="padding: 5px"></i>
                    <input oninput="mascara(this, 'tel')" class="input-text" type="text" name="telefone celular" placeholder="XXXXX-XXXX" maxlength="9" id="cel" />
                </label>
                <label class="label-input" for=""><br>
                    <i class="fas fa-road icon-modify" style="padding: 5px"></i>
                    <input class="input-text" type="text" name="endereco" placeholder="Endereço" id="adress"/>
                </label>
                <label class="label-input" for="">
                    <i class="fas icon-modify" style="padding: 5px"></i>
                    <textarea id="w3mission" rows="4" cols="50" id="msg">Deixe uma mensagem</textarea>
                </label>
                <input type="button" onclick="formSend()" class="btn-login btn-second" value="Cadastrar"/>
            </form>            
        </div>
    </div>
    <!-- Segundo Conteudo-->
    <div class="content segundo-conteudo">
        <!-- Primeira Coluna-->
        <div class="primeira-coluna">
            <h2 class="title title-primary">Olá, Amigo!</h2>
            <p class="descricao descricao-primary">Digite seus dados pessoais</p>
            <p class="descricao descricao-primary">e comece a jornada conosco</p>
            <button id="signup" class="btn-login btn-primary">sign up</button>
        </div>
        <!-- Segunda Coluna-->
        <div class="segunda-coluna">
            <div class="exit-left">
                <a href="index.php?page=main">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <h2 class="title title-second">Sign in to Developer</h2>
            <div class="midia-social">
                <ul class="list-social-media">
                    <a class="link-midia-social" href="#">
                        <li class="iten-midia-social">
                            <i class="fab fa-facebook-f"></i>
                        </li>
                    </a>
                    <a class="link-midia-social" href="#">
                        <li class="iten-midia-social">
                            <i class="fab fa-google-plus-g"></i>
                        </li>
                    </a>
                    <a class="link-midia-social" href="#">
                        <li class="iten-midia-social">
                            <i class="fab fa-linkedin-in"></i>
                        </li>
                    </a>
                </ul>
            </div>
            <p class="descricao">Ou use seu email para registro</p>
            <form action="" class="form">
                <label class="label-input" for="">
                    <i class="far fa-envelope icon-modify" style="padding: 5px"></i>
                    <input type="email" placeholder="Email">
                </label>
                <label class="label-input" for="">
                    <i class="fas fa-lock icon-modify" style="padding: 5px"></i>
                    <input type="password" placeholder="Senha">
                </label>
                <a class="link-midia-social password" href="">Esqueceu sua senha?</a>
                <button class="btn-login btn-second">sign in</button>
            </form>
        </div>
    </div>
</div>
<script src="view/js/main.js"></script>
<script>
    function formSend(){
        var nome = document.getElementById('nome');
        var email = document.getElementById('email');
        var pass = document.getElementById('pass');
        var pass2 = document.getElementById('pass2');
        var data = document.getElementById('data'); 
        var sexM = document.getElementById('sexM'); 
        var sexF = document.getElementById('sexF');
        var fixo = document.getElementById('telfixo');
        var cel = document.getElementById('cel');
        var adress = document.getElementById('adress');
        var msg = document.getElementById('msg');
        var arr={nome,email,pass,pass2,data,sexM,sexF,fixo,cel,adress,msg};
        var msg = "preencha corretamente os campos :";

        console.log(nome.value);
    }

    
    
</script>
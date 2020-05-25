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
            <!-- <form id="myForm" method="POST" action="">
            First name: <input type="text" name="name"><br>
            Last name: <input type="text" name="tel"><br><br>
            <input name="btn" type="submit" value="Enviar"/>
            </form> -->
            <form name="myform" id="cadastroForm" class="form" method="post" action="">
                <label class="label-input " for="">
                    <i class="far fa-user icon-modify" style="padding: 5px"></i>
                    <input type="text" placeholder="Nome" id="nome" name='nome'>
                </label>

                <label class="label-input" for="">
                    <i class="far fa-envelope icon-modify" style="padding: 5px"></i>
                    <input type="email" placeholder="Email" id="email" name='email'>
                </label>
                <label class="label-input" for="">
                    <i class="far fa-envelope icon-modify" style="padding: 5px"></i>
                    <input type="email" placeholder="Repita o e-mail" id="email2">
                </label>

                <label class="label-input" for="">
                    <i class="fas fa-lock icon-modify" style="padding: 5px"></i>
                    <input type="password" placeholder="Senha" id="pass" name='pass'>
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
                    <input oninput="mascara(this, 'tel')" class="input-text" type="text" placeholder="XXXX-XXXX" id="telfixo" name='tel'/>
                </label>
                <label class="label-input" for="">
                    <i class="fas fa-mobile-alt icon-modify" style="padding: 5px"></i>
                    <input oninput="mascara(this, 'tel')" class="input-text" type="text" name="telefone celular" placeholder="XXXXX-XXXX" maxlength="9" name='cel' id="cel" />
                </label>
                <label class="label-input" for=""><br>
                    <i class="fas fa-road icon-modify" style="padding: 5px"></i>
                    <input class="input-text" type="text" name="endereco" placeholder="Endereço" id="adress"/>
                </label>
                <label class="label-input" for="">
                    <i class="fas icon-modify" style="padding: 5px"></i>
                    <textarea id="w3mission" rows="2" cols="50" id="msg" name='msg' placeholder="Deixei sua mensagem aqui..."></textarea>
                </label>                
                    <input type="hidden" name='metodo' value="cadastro">
                    <input type="button" onClick="sendForm()" class="btn-login btn-primary" value="cadastro">                
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
            <h2 class="title title-second">Login</h2>
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
            <form action="" class="form" method="post" action="">
                <label class="label-input" for="">
                    <i class="far fa-envelope icon-modify" style="padding: 5px"></i>
                    <input type="email" placeholder="Email" name='login'>
                </label>
                <label class="label-input" for="">
                    <i class="fas fa-lock icon-modify" style="padding: 5px"></i>
                    <input type="password" placeholder="Senha" name='pass'>
                </label>
                <input type="submit" class="btn-login btn-second" name='metodo' value="login">
            </form>
        </div>
    </div>
</div>
<script src="view/js/main.js"></script>
<script>
    function sendForm(){
        var nome = document.getElementById('nome');
        var email = document.getElementById('email');
        var email2 = document.getElementById('email2');
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
        var erro = "preencha corretamente os campos : \n\n";
        var errado=false

        if(pass.value == "" || pass2.value=="" || pass2.value!=pass.value){
            erro += "passwords nao equivalentes ou vazias\n\n";
            errado=true;
        }   
        if(email.value == "" || email2.value=="" || email2.value!=email.value){
            erro += "email nao equivalentes ou vazios\n\n";
            errado=true;
        } 

        if(nome.value == null || nome.value==""){
            erro += "nome vazio";
            errado=true;
        } 

        if(errado){
            alert(erro);
        }
        else{
            alert("Cadastro feito com sucesso");
            document.getElementById("cadastroForm").submit();
        }
        //document.getDocumentbyId('cadastroForm').submit();
    }   
</script>
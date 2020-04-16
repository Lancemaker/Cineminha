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
            <form action="" class="form">
                <label class="label-input " for="">
                    <i class="far fa-user icon-modify" style="padding: 5px"></i>
                    <input type="text" placeholder="Nome">
                </label>

                <label class="label-input" for="">
                    <i class="far fa-envelope icon-modify" style="padding: 5px"></i>
                    <input type="email" placeholder="Email">
                </label>

                <label class="label-input" for="">
                    <i class="fas fa-lock icon-modify" style="padding: 5px"></i>
                    <input type="password" placeholder="Senha">
                </label>

                <label class="label-input" for="">
                    <i class="fas fa-calendar icon-modify" style="padding: 5px"></i>
                    <input oninput="mascara(this, 'data')" class="input-text" type="text" name="dataNascimento" placeholder="DD/MM/AAAA" width="50%" />
                </label>

                <label class="label-input-radio">
                    <p>Qual o seu sexo?</p>
                    <input type="radio" name="sexo" value="M">
                    <p style="text-align: center">Masculino</p>
                    <input type="radio" name="sexo" value="F">
                    <p style="text-align: center">Feminino</p>
                </label>

                <label class="label-input" for="">
                    <i class="fas fa-phone icon-modify" style="padding: 5px"></i>
                    <input oninput="mascara(this, 'tel')" class="input-text" type="text" placeholder="XXXX-XXXX" />
                </label>
                <label class="label-input" for="">
                    <i class="fas fa-mobile-alt icon-modify" style="padding: 5px"></i>
                    <input oninput="mascara(this, 'tel')" class="input-text" type="text" name="telefone celular" placeholder="XXXXX-XXXX" maxlength="9" />
                </label>
                <label class="label-input" for=""><br>
                    <i class="fas fa-road icon-modify" style="padding: 5px"></i>
                    <input class="input-text" type="text" name="endereco" placeholder="Endereço"/>
                </label>
                <label class="label-input" for="">
                    <i class="fas icon-modify" style="padding: 5px"></i>
                    <textarea id="w3mission" rows="4" cols="50"></textarea>
                </label>
            </form>
            <input type="button" class="btn-login btn-second" onclick="location.href=href='index.php?page=cadastro';" value="sign up" />
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
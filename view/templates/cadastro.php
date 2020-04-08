<div class="container-cadastro">
    <fieldset class="formulario" style="width: 30%; margin:0 auto">
        <div class="formulario-interno">
            <h1 class=title-cadastro>Cadastro</h1>
            <label class="label-cadastro" for="dataNascimento">Data de Nascimento<br>
                <input oninput="mascara(this, 'data')" class="input-text" type="text" name="dataNascimento" placeholder="DD/MM/AAAA" width="50%" />
            </label>
            <br>
            <label class="label-cadastro" for="">Qual seu sexo?<br>
                <input type="radio" name="sexo" value="M" />Masculino
                <br>
                <input type="radio" name="sexo" value="F" />Feminino
            </label>
            <br>
            <label class="label-cadastro" for="Estado Civil">Estado Civil<br>
                <select required id="Estado Civil" name="Estado Civil">
                    <option value="">selecione</option>
                    <option value="Solteiro(a)">Solteiro(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>
                    <option value="Viuvo(a)">Viuvo(a)</option>
                </select>
            </label>
            <br>
            <label class="label-cadastro" for="telefone residencial">Telefone Residencial<br>
                <input oninput="mascara(this, 'tel')" class="input-text" type="text" placeholder="XXXX-XXXX" />
            </label><br>

            <label class="label-cadastro" for="telefone celular">Telefone Celular<br>
                <input oninput="mascara(this, 'tel')" class="input-text" type="text" name="telefone celular" placeholder="XXXXX-XXXX" maxlength="9" />
            </label><br>

            <label class="label-cadastro" for="endereco">Endereço<br>
                <input class="input-text" type="text" name="endereco" />
            </label><br>

            <p>Menssagem:<br>
                <textarea name="mensagem" rows="6" cols="60"></textarea>
                <form action="http://localhost/index.php?page=horarios">
                    <div class="cadastrar">
                    <input type="button" id="signin" class="btn-login btn-second cadastro" onclick="location.href='http://localhost/index.php?page=main';" value="Cadastrar" />
                    </div>
                </form>
        </div>
        <script src="jquery.js" type="text/javascript"></script>
        <script src="jquery.maskedinput.js" type="text/javascript"></script>

    </fieldset>

</div>
<script src="view/js/main.js"></script>
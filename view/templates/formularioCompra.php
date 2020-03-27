<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="width:40%;margin: 0 auto; border-color: red">
    <form action="" name="Form1" method="POST">
    <p>nome:
    <input type="text" name="nome" size="20"/>
    <br>
    <p>Sobrenome:
    <input type="text" name="sobrenome" size="20/">
    </form>
</div>

<div sstyle="width:40%;margin: 0 auto; border-color: red">
    <form action="" name="Form2" method="POST">
    <p>nome:
    <input type="text" name="user" size="20"/>
    <br>
    <p>Pass:
    <input type="password" name="password" size="20/">
    </form>
</div>

<div style="width:40%;margin: 0 auto; border-color: red">
    <form action="" name="Form3" method="POST">

    <p>Eu tenho uma bike:
    <input type="checkbox" name="tem_bike" value="bike"/>
    <br>

    <p>Eu tenho um carro:
    <input type="checkbox" name="tem_bike" value="bike"/>
    <br>

    <p>Eu tenho uma avião:
    <input type="checkbox" name="tem_aviao" value="aviao"/>
    <br>
    </form>
</div>

<div style="width:40%;margin: 0 auto; border-color: red">
    <form action="" name="Form" method="POST">
    Qual é seu sexo ?
    <br>
    <input type="radio" name="sexo" value="M">Masculino
    <br>
    <input type="radio" name="sexo" value="F">Feminino
</div>

<div style="width:40%;margin: 0 auto; border-color: red">
    <form action="" name="Form" method="POST">
    Qual é seu sexo ?
    <br>
    <input type="radio" name="sexo" value="M">Masculino
    <br>
    <input type="radio" name="sexo" value="F">Feminino
    </form>
</div>
<div>
    <form action="">
    <input type="button" value="Hello world!" />
    </form>
</div>

<div>
    <form name="input" action="form_action.asp" method="get">
    Digite seu primeiro nome:
    <input type="text" name="FirstName" value=“Antonio" size="20" />
    <br>
    Digite seu último nome:
    <input type="text" name="LastName" value=“José" size="20" />
    <br>
    <input type="submit" value="Enviar" />
    </form>
    <p> Se você clicar no botão "Enviar" você enviará sua entrada a uma nova página
    chamada "form_action.asp".
    </p>
</div>
</body>
</html>
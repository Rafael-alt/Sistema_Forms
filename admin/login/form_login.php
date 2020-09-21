<?php

 require_once("../seguranca.php"); 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login</title>
        <!-- <link rel="stylesheet"type="text/css" href="../css/formatacao.css"> -->
             <link rel="stylesheet" href="../css/estilo.css">
<style type="text/css">

#container {
    width: 400px;
    height: 310px;
    background-color: rgba(255,255,255,0.3);
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
	border-radius: 10px;
	margin: 0 auto;
	margin-top: 120px;
    text-align: center;
}
</style>

</head>
<body>

<div id="container">

<img src="../imagens/perfil.png">

<form name="frm_login" action="cadastro_login.php" method="post">
    
    <div>
        <input class="email" type="text" name="txt_nome" placeholder="Digite o seu nome" >
    </div>

    <div>
        <input class="email" type="text" name="txt_login" placeholder="Digite o usuário" >
    </div>

    <div>
        <input class="senha" type="password" name="txt_senha" placeholder="Digite a senha" >
    </div>

    <div>
        <input class="submit" class="hover" name="btn_enviar" type="submit" value="Cadastrar" class="btn">
     </div>
</form>
    
   <!-- Primeiro layouy de Formulário (Feito em aula)
        <div id="principal">
        <label>Nome </label>
            <input name="txt_nome" type="text" class="input_01">

            <label>Login </label>
            <input name="txt_login" type="text" class="input_01">

            <label>Senha </label>
            <input name="txt_senha" type="password" class="input_01">

            <input name="btn_enviar" type="submit" value="Enviar" class="btn">
            </div>
    
        </form>
-->

</body>
</html>
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

    .select_01 {
	width: 90%;
	height: 24px;
    margin: 5px;
    align-items: center;
    padding-left: 12px;
}
    </style>
</head>
<body>

<div id="container">

    <img src="../imagens/perfil.png">

    <form name="frm_login" action="cadastro_news.php" method="post">
        
        <div>
            <input type="text" name="txt_titulo" placeholder="Digite o Título" >
        </div>

        <div>
            <input type="text" name="txt_descricao" placeholder="Digite a Descrição" >
        </div>
        
        <div>
            <input class="senha" type="password" name="txt_senha" placeholder="Digite a senha" >
        </div>

        <div>
            <input type="text" name="txt_autor" placeholder="Digite o Autor" >
        </div>

        <label> <strong>Status</strong></label>

                <select name="sel_status" class="select_01">
                    <option value="A"><strong>Ativo</strong> </option>
                    <option value="I"><strong>Inativo</strong></option>
                </select> 

        <div>
            <input class="submit" name="btn_enviar" type="submit" value="Cadastrar" class="btn">
        </div>
</form>
<!-- Primeiro layout do Formulário (Feito em aula)
    <form name="frm_news" action="cadastro_news.php" method="post">
    <div id="principal">
        <label>Título</label>
            <input name="txt_titulo" type="text" class="input_01">

            <label>Descrição </label>
            <input name="txt_descricao" type="text" class="input_01">

            <label>Autor </label>
            <input name="txt_autor" type="text" class="input_01">

            <label>Status </label>

            <select name="sel_status" class="select_01">
                <option value="A">Ativo </option>
                <option value="I">Inativo</option>
            </select>                


            <input name="btn_enviar" type="submit" value="Enviar" class="btn">
            </div>
</form> -->
</body>
</html>
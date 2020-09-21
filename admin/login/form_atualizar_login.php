<?php
    require_once("../seguranca.php"); 
    require_once('../conexao/banco.php');
    $id = $_REQUEST['log_codigo'];
    
    
        $sql = "select * from tb_login where log_codigo = '$id'";
        $sql = mysqli_query($con, $sql) or die ("Erro na SQL!");
        $dados = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários Atualizar</title>
    <!-- <link rel="stylesheet" type="text/css" href="../css/formatacao.css"> -->
         <link rel="stylesheet" href="../css/estilo.css">
<style>
#container {
	width: 400px;
	height: 380px;
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
<div id="container"><br>

    <form name="frm_login" action="atualizar_login.php" method="post">
        
        <div>
            <label> <strong> Código </strong> </label>
            <input type="text" name="txt_codigo"value="<?php echo $dados['log_codigo'];?>">
        </div>

        <div>
            <label> <strong> Nome </strong> </label>
            <input type="text" name="txt_nome" placeholder="Nome" value="<?php echo $dados['log_nome'];?>">
        </div>

        <div>
            <label> <strong> Login </strong> </label>
            <input type="text" name="txt_login" placeholder="Login"  value="<?php echo $dados['log_login'];?>">
        </div>

        <div>  
         <label> <strong> Senha </strong> </label>
            <input type="text" name="txt_senha"  placeholder="Senha"  value="<?php echo $dados['log_senha'];?>">
        </div>

        <div>
    <input class="submit" name="btn_enviar" type="submit" value="Atualizar">
</div>
    </form>

</div>
</body>
</html>
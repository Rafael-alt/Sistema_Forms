<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> .:: Login ::. </title>

<!-- <link rel="stylesheet" type="text/css" href="css/formatacao.css">-->
<link rel="stylesheet" href="css/estilo.css">
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

			<img src="imagens/perfil.png">

			<form name="frm_login" action="validacao.php" method="post">
				
				<div>
					<input class="email" type="text" name="txt_usuario" placeholder="Digite seu usuário" >
				</div>

				<div>
					<input class="senha" type="password" name="txt_senha" placeholder="Digite sua senha" >
				</div>

				<div>
          <input class="submit" class="hover" name="btn_enviar" type="submit" value="Logar" class="btn">
        </div>
        <div class="dica">
            <lable>
                <h4>User: Rafael | Senha: 123 </h4>  
             </lable>
        </div>
			</form>
			
    </div>
    
    


</body>
</html>


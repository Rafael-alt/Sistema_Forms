<?PHP

require_once("../seguranca.php");

?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title> =|= Admin v.2.0 =|= </title>
    <link href="../css/menu.css" rel="stylesheet" type="text/css" />

<style type="text/css">

body {
	background-color: #FFF;
	margin: 0px;
	width: 100%;
	height: 100vh;
	font-family: Verdana, Geneva, sans-serif;
	color: white;
	font-size: 14px;
}

#principal {	
	width: 100%;
	height: 1000px;
}

#menu {
	width: 20%;
	height: 1000px;
	background-image: linear-gradient( to right,  #8B008B, #8B008B,  #8B008B, black);
	float: left;
}

#conteudo {
	width: 80%;
	height: 100vh;
	float: left;	
	background-image: url('../imagens/fundo.jpg'); 
}

.titulo {
	width: 96%;
	height: 21px;
	float: left;
	border: 0px;
	font-weight: bold;
	color: #FFF;
	background-image: linear-gradient( to right,  #black, #8B008B, #8B008B, black );
	padding: 2%;
}

.botao {
	width: 92%;
	height: 20px;
	float: left;
	border: 0px;
	border-bottom: 2px;
	border-color: black;
	border-style: solid;
	padding: 4%;
}

.botao:hover {
	color: #FF00FF ;
}

a {
	font-family: Verdana, Geneva, sans-serif;
	color: #fff;
	font-size: 14px;
}

img {
	width: 12px;
	height: 12px;
}
	
</style>

</head>
<body>
<div id="principal">
  <div id="menu">   
  	<div class="titulo"> =|= Admin v.2.0 =|=</div>
    <div class="titulo"> :: Login </div>
    
    <a href="../login/form_login.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"><strong>Formulário de Cadastro</strong> </div> 
    </a>
    
    <a href="../login/consulta_login.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> <strong>Consulta</strong> </div>
    </a>

	<div class="titulo">:: News </div>
    
    <a href="../news/form_news.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> <strong>Formulário de Cadastro</strong>  </div> 
    </a>
    
    <a href="../news/consulta_news.php" target="conteudo"> 
      <div class="botao"> <img src="../img/icon_consulta.png"> <strong>Consulta</strong> </div>
    </a>
    
    
    <div class="titulo"> =|= Sair =|=</div>
    <a href="../logout.php"> 
      <div class="botao"> <img src="../img/icon_cadastro.png"> <strong>Logout</strong> </div> 
    </a>
        
  </div>
    
  <div id="conteudo"> 
    <iframe name="conteudo" src="" height="1000px" width="100%" frameborder="0" scrolling="auto"> </iframe>
  </div>
  
</div>
</body>
</html>

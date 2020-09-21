<?php
require_once("../seguranca.php");
require_once('../conexao/banco.php');
?>
<?php
$sql = "select *, date_format(log_data_cadastro, '%d/%m/%Y') as data_cadastro from tb_login" ;
$sql = mysqli_query($con, $sql) or die ("Erro na SQL!");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta Login</title>
        <link rel="stylesheet" type="text/css" href="../css/consulta.css">

        <script type="text/javascript">
    
    function excluir_registro( ) {
        if( !confirm('Deseja realmente excluir este registro?') )
        {
        if( window.event)
            window.event.returnValue=false;
        else
            e.preventDefault();
     }
    }
    </script>
    </head>
<body>
<div id="principal"> 
<div class="linha">
    
    <div class="coluna_03"><strong>Nome</strong> </div>
    <div class="coluna_03"><strong>Login</strong> </div>
    <div class="coluna_03"><strong>Data</strong> </div>
    <div class="coluna_01"><strong>Código</strong> </div>
</div>  

    <?php while ($dados = mysqli_fetch_array($sql)) { ?>
        
<div class="linha">
        
        <div class="coluna_03"><strong><?php echo $dados['log_nome']; ?></strong> </div>
        <div class="coluna_03"><strong><?php echo $dados['log_login']; ?></strong>  </div>
        <div class="coluna_03"><strong><?php echo $dados['data_cadastro']; ?> </strong> </div>
        <div class="coluna_01"><strong><?php echo $dados['log_codigo']; ?></strong> </div>

        <div class="coluna_01">
<a href="delete_login.php?log_codigo=<?php echo $dados['log_codigo']; ?>" onclick="excluir_registro(event)">
    <img src="../img/excluir.png">
</a>
</div>
<div class="coluna_01">
<a href="form_atualizar_login.php?log_codigo=<?php echo $dados['log_codigo']; ?> ">
<img src="../img/edit.png">
</a>
</div>
</div>
<?php } ?>
</div>
</body>
</html>

 
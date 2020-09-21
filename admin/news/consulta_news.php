<?php
require_once("../seguranca.php");
require_once('../conexao/banco.php');

$sql = "select *, date_format(new_data_publicacao, '%d/%m/%Y') as data_publicacao from tb_news";
$sql = mysqli_query($con, $sql) or die ("Erro na SQL!");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta News</title>
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
            <div class="coluna_01"><strong>ID</strong> </div>
            <div class="coluna_02"><strong>Título</strong> </div>
            <div class="coluna_02"><strong>Descrição</strong> </div>
            <div class="coluna_02"><strong>Autor</strong> </div>
            <div class="coluna_02"><strong>Data</strong> </div>
            <div class="coluna_04"><strong>Status</strong> </div>
        </div>    

    <?php while ($dados = mysqli_fetch_array($sql)) { ?>
        <div class="linha">

        <div class="coluna_01"><strong><?php echo $dados['new_codigo']; ?></strong> </div>
        <div class="coluna_02"><strong><?php echo $dados['new_titulo']; ?></strong> </div>
        <div class="coluna_02"><strong><?php echo $dados['new_descricao']; ?></strong> </div>
        <div class="coluna_02"><strong><?php echo $dados['new_autor']; ?></strong> </div>
        <div class="coluna_02"><strong><?php echo $dados['data_publicacao']; ?></strong> </div>
        <div class="coluna_04"><strong> <?php echo $dados['new_status']; ?> </strong></div>

        <div class="coluna_01">

            <a href="delete_news.php?new_codigo=<?php echo $dados['new_codigo']; ?> " onclick="excluir_registro(event)">
                <img src="../img/excluir.png">
            </a>
        </div>
        
        <div class="coluna_01">
            <a href="form_atualizar_news.php?new_codigo=<?php echo $dados['new_codigo']; ?> ">
                <img src="../img/edit.png">
            </a>
        </div>
    </div>
    <?php } ?>
</body>
</html>
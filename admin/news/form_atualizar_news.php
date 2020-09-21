<?php
    require_once("../seguranca.php");
    require_once('../conexao/banco.php');
    $id = $_REQUEST['new_codigo'];
    
    
        $sql = "select * from tb_news where new_codigo = '$id'";
        $sql = mysqli_query($con, $sql) or die ("Erro na SQL!");
        $dados = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários Atualizar</title>
   <!--  <link rel="stylesheet" type="text/css" href="../css/formatacao.css"> -->
     <link rel="stylesheet" href="../css/estilo.css"> 

</head>
<body>

    <div id="container"><br>

    <form name="frm_news" action="atualizar_news.php" method="post">
        
        <div>
            <label> <strong> Código </strong> </label>
            <input type="text" name="txt_codigo" placeholder="Código" value="<?php echo $dados['new_codigo'];?>">
        </div>

        <div>
            <label> <strong> Título </strong> </label>
            <input type="text" name="txt_titulo" placeholder="Título" value="<?php echo $dados['new_titulo'];?>">
        </div>

        <div>
            <label> <strong> Descrição </strong> </label>
            <input type="text" name="txt_descricao" placeholder="Descrição" value="<?php echo $dados['new_descricao'];?>">
        </div>

        <div>  
        <label> <strong> Autor </strong> </label>
            <input type="text" name="txt_autor"  placeholder="Autor"   value="<?php echo $dados['new_autor'];?>">
        </div>
        <select name="sel_status" class="select_00">
            <option value="A" <?php if($dados['new_status'] == 'A') {
                echo 'selected';} ?>>  Ativo </option>
            <option value="I" <?php if($dados['new_status'] == 'I') {
                echo 'selected';} ?>> Inativo</option>
        </select> 
        <div>
        <input class="submit" name="btn_enviar" type="submit" value="Atualizar">
    </div>
    </form>

</body>
</html>
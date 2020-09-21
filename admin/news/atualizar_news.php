<?php

    require_once("../conexao/banco.php");

    $id    = $_REQUEST['txt_codigo'];

    $titulo  = $_REQUEST['txt_titulo'];
    $autor = $_REQUEST['txt_autor'];
    $descricao = $_REQUEST['txt_descricao'];
    $status = $_REQUEST['sel_status'];


$sql = "update tb_news set
                        new_titulo = '$titulo',
                        new_descricao = '$descricao',
                        new_autor = '$autor',
                        new_status = '$status'
                    where
                        new_codigo = '$id'";
                    
mysqli_query($con, $sql) or die ("Erro na SQL!");

header("Location: consulta_news.php");

//pronto!
?>
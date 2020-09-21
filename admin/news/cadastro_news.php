<?php

require_once('../conexao/banco.php');

$titulo = $_REQUEST['txt_titulo'];
$autor = $_REQUEST['txt_autor'];
$descricao = $_REQUEST['txt_descricao'];
$status = $_REQUEST['sel_status'];

$sql = "insert into tb_news (new_titulo,new_autor, new_descricao , new_status)
                                values ('$titulo', '$autor', '$descricao', '$status')";

 mysqli_query($con, $sql) or die ("Erro na SQL!");
header("Location: consulta_news.php");                               

//pronto!
?>
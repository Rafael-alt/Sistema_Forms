<?php

    require_once('../conexao/banco.php');

    $id = $_REQUEST['log_codigo'];
    $sql = "delete from tb_login where log_codigo = '$id'";

    mysqli_query($con, $sql) or die ("Erro na SQL!");

        header("Location: Consulta_login.php");
        

?>
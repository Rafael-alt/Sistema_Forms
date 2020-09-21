<?php

 $con = mysqli_connect("localhost","root","","db190045");

    if(mysqli_connect_errno()) {
        echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
    } else {
        mysqli_select_db($con,"db190045");
    }

?>
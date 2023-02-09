<?php

    $num= $_GET['num'];
    

    for($cont = 0; $cont <= 10; $cont++){
    $result = $num * $cont;  
    echo "$num x $cont = $result <br>";
    }
?>
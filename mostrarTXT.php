<?php

    $file = fopen("contaux.txt", "r");

    while(!feof($file))
    {
        $line = fgets($file);
        $datos = explode(",", $line);
        
        echo $datos[2]."<br/>";
    }



?>
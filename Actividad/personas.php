<?php        

    $fp = fopen("bweb2.txt", "r");
    $file = fopen("personas.txt", "w+");
    
    $fila = 1;

    $id = 1;

    while(!feof($fp))
    {
        $line = fgets($fp);
        
        $datos;
        
        if($fila >= 43)
        {
            if(!feof($fp))
            fputs($file, $id." | ");
            
            for( $i = 100; $i < 130 ; $i++)
            {
                $datos[$i] = $line[$i];
            }
            
            for( $i = 100; $i < 130 ; $i++)
            {
                fputs ($file, $datos[$i]);
            }
            
            fputs($file, "\n");
            
            $id++;
            
            
        }
        
        
        $fila++;
    }

    fclose($fp);
    fclose($file);

    echo "ARCHIVO CREADO";
?>
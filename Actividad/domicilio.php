<?php   

    // NOTA: Cuando se repiten demasiado los for, ahi es cuando en los scripts vehiculos.php y comprobante.php implemento las funciones y el codigo queda mucho mas legible y simple

    $fp = fopen("bweb2.txt", "r"); // Abre archivo para leer datos
    $file = fopen("domicilio.txt", "w+"); // Crea/Escribe datos leidos en domicilio.txt
    
    $fila = 1; //Identificador de fila

    $id = 1; // Variable creadora de ID

    while(!feof($fp))
    {
        $line = fgets($fp); // Extrar linea
        
        $domicilio;
        
        $altura;
        
        $CP;
        
        $localidad;
        
        if($fila >= 43) // Comienza a leer datos a partir de la linea 43
        {
            if(!feof($fp))
            fputs($file, $id."|"); // Escribe ID y separador
            
            for( $i = 130; $i < 150 ; $i++) // Al ser $line un string, se pasa caracter por caracter al array
            {
                $domicilio[$i] = $line[$i];
            }
            
            for( $i = 130; $i < 150 ; $i++)
            {
                fputs ($file, $domicilio[$i]); // Escribe en domicilio.txt el dato domicilio
            }
            
            if(!feof($fp))
            fputs($file,"|");
            
            for( $i = 150; $i < 156 ; $i++)
            {
                $altura[$i] = $line[$i]; 
            }
            
            for( $i = 150; $i < 156 ; $i++)
            {
                fputs ($file, $altura[$i]); // Escribe en domicilio.txt el dato altura
            }
            
            if(!feof($fp))
            fputs($file,"|");
            
            for( $i = 156; $i < 160 ; $i++)
            {
                $CP[$i] = $line[$i];
            }
            
            for( $i = 156; $i < 160 ; $i++)
            {
                fputs ($file, $CP[$i]); // Escribe en domicilio.txt el dato Codigo Postal
            }
            
            if(!feof($fp))
            fputs($file,"|");
            
            for( $i = 160; $i < 180 ; $i++)
            {
                $localidad[$i] = $line[$i];
            }
            
            for( $i = 160; $i < 180 ; $i++)
            {
                fputs ($file, $localidad[$i]); // Escribe en domicilio.txt el dato Localidad
            }
            
            
            
            fputs($file, "\n"); //Despues de escribir toda la linea del archivo, genera un salto de linea para que se escriba la siguiente linea de datos
            
            $id++; // Incrementa ID
            
            
        }
        
        
        $fila++;
    }

    fclose($fp); // Se cierran los archivos
    fclose($file);

    if($file) // Si esta todo correcto, se muestra la leyenda
    {
        echo "ARCHIVO CREADO";
    }
?>

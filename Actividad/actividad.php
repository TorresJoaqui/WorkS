<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
    <!-- Cada elemento a, redirecciona a cada script php para generar determinado archivo con su tabla -->
   
    <a href="personas.php">Generar archivo tabla Personas</a><br>
    <a href="domicilio.php">Generar archivo tabla Domicilio</a><br>
    <a href="vehiculo.php">Generar archivo tabla Vehiculo</a><br>
    <a href="comprobante.php">Generar archivo tabla Comprobante</a><br>
    
   
    <?php
    
    /// Todo el codigo que se encuentran abajo, fueron pruebas
/*
    $fp = fopen("bweb2.txt", "r");
    
    $fila = 1;

    while(!feof($fp))
    {
        $line = fgets($fp);
        
        $datos;
        
        if($fila == 43)
        {
            for( $i = 0; $i < 12 ; $i++)
            {
                $datos[$i] = $line[$i];
            }
            
            for( $i = 0; $i < 12 ; $i++)
            {
                ///echo $datos[$i];
            }
            
        }
        
        
        $fila++;
    }
?>
*/
    
    
    ?>
</body>
</html>
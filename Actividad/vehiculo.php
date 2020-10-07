<?php        

    $fp = fopen("bweb2.txt", "r");
    $file = fopen("vehiculo.txt", "w+");
    
    $fila = 1;

    $id = 1;


    while(!feof($fp))
    {
        $line = fgets($fp);
        
        $datos;
        
        // Cada valor que se da a estas variables, es la posicion dentro del string $line en la que se encuentra su informacion
        
        $dominio = 18;
        
        $marca1 = 30;
        
        $modelo = 45;
        
        $chasis = 60;
        
        $motor = 75;
        
        
        if($fila >= 43) // Si la fila es mayor a 43(que es donde empezan los datos), se ejecutan las siguientes funciones
        {
            pasajeDatos($line, $fp, $file, $id, $dominio, $dominio + 12); // Se pasan parametros para que la funcion pueda escribir el archivo con los datos, en la ultima variable que se le pasa $nroRecibo + 12, es para que el for de la funcion recorra de 0 a 12, que son las posiciones que contienen los datos del numero de recibo. Y asi se ejecutan de las mismas formas las siguientes funciones
            
            pasajeDatos($line, $fp, $file, $id, $marca1, $marca1 + 15);
            
            pasajeDatos($line, $fp, $file, $id, $modelo, $modelo + 15);
            
            pasajeDatos($line, $fp, $file, $id, $chasis, $chasis + 15);
            
            pasajeDatos($line, $fp, $file, $id, $motor, $motor + 15);
            
            
            fputs($file, "\n"); // Genera salto de linea dentro del archivo
            
            $id++;
            
            
        }
        
        
        $fila++;
    }

    fclose($fp);
    fclose($file);

    echo "ARCHIVO CREADO";

function pasajeDatos($line, $fp, $file, $id, $marca1, $marca2)
{
    $datos;
    
    if(!feof($fp))
        if($marca1 == 18) // If con la intencion de solo imprimir el ID una sola vez por linea
            fputs($file, $id."|");
        else
            fputs($file,"|");
            
            for( $i = $marca1; $i < $marca2 ; $i++)
            {
                $datos[$i] = $line[$i]; // for que sirve para pasar los datos del archivo a la variable
            }
             
            for( $i = $marca1; $i < $marca2 ; $i++)
            {
                fputs ($file, $datos[$i]); // for que sirve para pasar los datos de la variable y escribirlo en el archivo 
            }
}
?>
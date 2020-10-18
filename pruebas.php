<?php 

        rename("movimientosAUX.txt", "movimientos.txt");
    
        header("Location: tables.php");

        //$mi_pdf = 'archivos/JOAQUIN.pdf';
        //header('Content-type: application/pdf');
        //header('Content-Disposition: attachment; filename="'.$mi_pdf.'"');
        ///header("Location: {$mi_pdf}");
        ///readfile($mi_pdf);
        
        ///echo "<a href='{$mi_pdf}'>A</a>";

    

    /*$file = fopen("contactosaux.csv", "w+");

        
        fwrite($file, "Hola");
        
        echo "<br/>"; 
    
    fclose($file);*/

    


    ?>
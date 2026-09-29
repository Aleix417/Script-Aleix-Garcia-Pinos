
    <?php
        $euro = $_GET["euros"];
        $dolar = $_GET["dolars"];
     
        

        if ($dolar == NULL ) {
           $convertir1 = $euro * 1.14;
            echo "Resultat: ", $convertir1;
        }
        
        else {
            $convertir2 = $dolar * 0.88;
            echo "Resultat: ", $convertir2;
        }
    ?>

    
    


    
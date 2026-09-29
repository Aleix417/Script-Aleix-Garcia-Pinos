
    
<?php
    date_default_timezone_set('Europe/Madrid');
        $hora = date("H:i:s");
        echo "Hora actual: ", $hora; 

        if ($hora >= 5 && $hora <= 14 ) {
            echo " Bon dia";

        }

        elseif ($hora >= 14 && $hora <= 19){
            echo " Bona tarda";
        }

        else {
            echo " Bona nit";
        }
    ?>







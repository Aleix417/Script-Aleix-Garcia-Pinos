<?php

    $IVA = $_GET["iva"];
    $Preu = $_GET["preu"];

    switch ($IVA) {
        case "IVA1":
        echo "El preu es " . ($Preu * 1.5 );
        break;
        case "IVA2":
        echo "El preu es " . ($Preu * 1.24 );
        break;
        case "IVA3":
        echo "El preu es " . ($Preu * 1.73 );
        break;
    }

?>
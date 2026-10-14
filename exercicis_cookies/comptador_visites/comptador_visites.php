<?php

$contador = 1; 
$codi_descompte = $_GET["descompte"];
$preu = $_GET["preu"];
$ncompra = 0;

if (isset($_COOKIE['contador'])){

$contador = $_COOKIE['contador'];
}
setcookie("contador", $contador + 1);


echo "Comptador d'accés : $contador ";


if ($contador >= 5 && $contador < 10)
    echo "Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga ";

elseif ($contador >= 10)
    echo "Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga ";

if ($codi_descompte = "BOTIGA20")
    echo "El preu total és " . ($preu * 0.20 );
    $ncompra + 1;
 
elseif ($codi_descompte = "BOTIGA50" && $ncompra < 1)
    echo "El preu total és " . ($preu * 0.50);
    $ncompra +1;

else
    echo "El preu total és " . $preu;  
    $ncompra +1;
?>
<?php

$contador = 1; 
$codi_descompte = $_GET["descompte"];
$preu = $_GET["preu"];
$ncompra = 0;

if (isset($_COOKIE['contador'])){

$contador = $_COOKIE['contador'];
}
setcookie("contador", $contador + 1);


echo "<p>Comptador d'accés : $contador </p>";


if (isset($_COOKIE['compres'])){
    $ncompra = $_COOKIE['compres'];
}

if ($codi_descompte === "BOTIGA20") {
    echo "<h3>El preu total és</h3>" . ($preu * 0.80 );
    $ncompra ++;
    setcookie("compres", $ncompra);
} 
elseif ($codi_descompte === "BOTIGA50") {
    echo "<h3>El preu total és: </h3>" . ($preu * 0.50)  ;
}
else{
    echo "<h3>El preu total és </h3>" . $preu  ;  
}

echo "<p>Nombre de compres realitzades : $ncompra </p>";

if ($contador >= 5 ) {
    echo "<p>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga </p>";

}
elseif ($contador >= 10 && $ncompra < 1) {
    echo "<p>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga </p>";
}

?>
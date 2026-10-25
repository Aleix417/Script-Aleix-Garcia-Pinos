
<h1>RESUM COMPRA:</h1>
<?php

$preutotal = 0;

session_start();

if (isset($_SESSION["beefnum"])){
    echo "<h2>Beefeater</h2>";
    echo "Unitats: " . htmlspecialchars($_SESSION["beefnum"]);
    $preutotal = $preutotal + ($_SESSION["beefnum"]*17); 
}

if (isset($_SESSION["henum"])) {
echo "<h2>Henessy XO</h2>";
echo "Unitats: " . htmlspecialchars($_SESSION["henum"]);
$preutotal = $preutotal + ($_SESSION["henum"]*236);
}

echo "<h2>Preu total</h2>" . $preutotal . " €";

echo "<br><a href=http://localhost/Script%20Aleix%20Garcia%20Pinos/exercicis_sessions/cistella_compra/destrucci%C3%B3_compra.php>Confirmar compra</a>";


?>
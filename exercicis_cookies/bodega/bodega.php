<?php

if (isset($_GET['edat'])) {
$edat = ($_GET['edat']);
}
setcookie('majoredat', $edat);


if (isset($_GET['idioma'])) {
$idioma = ($_GET['idioma']);
}
setcookie('idioma', $idioma);


if (isset($_GET['moneda'])) {
$moneda = ($_GET['moneda']);
}
setcookie('moneda', $moneda);


if ($edat == "no") {
    echo "<h1>No pots comprar, no ets major d'edat</h1>";
}
elseif ($edat == "si" && $idioma == "catala" && $moneda !== "€") {
    echo "<h1>Benvingut</h1><br>
    <p>T'oferim el Bacardi a 13 $moneda</p>";

    echo "<p>T'oferim el Beefeater a 16 $moneda</p>";
}
elseif ($edat == "si" && $idioma == "espanyol" ) {
    echo "<h1>Bienvenido</h1><br>
    <p>Te ofrecemos el Bacardi a 13 $moneda</p>";

    echo "<p>Te ofrecemos el Beefeater a 16 $moneda</p>";
}
elseif ($edat == "si" && $idioma == "angles" ) {
    echo "<h1>Welcome</h1><br>
    <p>We offer you Bacardi at 13 $moneda</p>";

    echo "<p>We offer you Beefeater at 16 $moneda</p>";
}
elseif ($edat == "si" && $idioma == "catala" && $moneda == "€") {
    echo "<h1>Benvingut</h1><br>
    <p>T'oferim el Bacardi a 13 $moneda</p>";

    echo"<p>T’oferim el vi “Les Terrasses” a un preu de 39 $moneda</p>";

    echo "<p>T'oferim el Beefeater a 16 $moneda</p>";
}
?>
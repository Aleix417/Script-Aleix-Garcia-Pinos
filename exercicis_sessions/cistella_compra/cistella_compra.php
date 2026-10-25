<?php

session_start();

if (isset($_POST['num1'])) {
    $_SESSION["beefnum"] = $_POST['num1'];

}



if (isset($_POST['num2'])) {
    $_SESSION["henum"] = $_POST['num2'];

}


header('Location: http://localhost/Script%20Aleix%20Garcia%20Pinos/exercicis_sessions/cistella_compra/');
?>
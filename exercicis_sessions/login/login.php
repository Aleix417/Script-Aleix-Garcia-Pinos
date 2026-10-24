<?php

session_start();

if (isset($_POST['usuari']) && isset($_POST['pwd'])) {
    $_SESSION["usuaris"] = $_POST['usuari'];
    $_SESSION["contrasenya"] = $_POST['pwd'];


    if ($_SESSION["usuaris"] == $_SESSION["contrasenya"]) {

        echo "<p>Login correcte</p>";
        echo "<p><a href=http://localhost/Script%20Aleix%20Garcia%20Pinos/exercicis_sessions/login/informaci%C3%B31.php>Informació 1</a></p>";
        echo "<p><a href=http://localhost/Script%20Aleix%20Garcia%20Pinos/exercicis_sessions/login/informaci%C3%B32.php>Informació 2</a></p>";
    }

    else {
        
        header('Location: http://localhost/Script%20Aleix%20Garcia%20Pinos/exercicis_sessions/login/');
        exit;
        
    }
}
else {
    echo "No funciona";
}


?>
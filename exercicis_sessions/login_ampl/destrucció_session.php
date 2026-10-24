<?php

session_start();
session_unset();
session_destroy();

if (isset($_SESSION['usuaris'])){

    echo "<h3>La sessió encara esta activa</h3>";
}
else {
    echo "<h3>La sessió ha sigut destruida</h3>";
}

if (isset($_SESSION['contrasenya'])){

    echo "<p>Encara està activa :( </p>";
}
else {
    echo "<p>Adéu!!</p>";
}

echo "<a href=http://localhost/Script%20Aleix%20Garcia%20Pinos/exercicis_sessions/login_ampl/>Tornar al login</a>";


?>
<?php

session_start();
echo htmlspecialchars($_SESSION["usuaris"]);
echo "<p>Pàgina de informació 1</p>";

echo "<a href=http://localhost/Script%20Aleix%20Garcia%20Pinos/exercicis_sessions/login_ampl/destrucci%C3%B3_session.php>Desloguejar</a>";

?>
<?php
        $nom = $_POST["nombre"];
        $cognoms = $_POST["cognom"];
        $email = $_POST["email"];
        $missatge = $_POST["missatge"];

        echo "Missatge rebut, " .$nom. " " .$cognoms. ". Gràcies per contactar. Et respondrem a " .$email. ".";
    ?>
      <form action='index.html' method='get'><button>Tornar</button></form>



    
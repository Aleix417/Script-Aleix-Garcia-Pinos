<?php
        $nom = $_GET["nombre"];
        $cognoms = $_GET["cognom"];
        $email = $_GET["email"];
        $missatge = $_GET["missatge"];

        echo "Missatge rebut, " .$nom. ". Gràcies per contactar. Et respondrem a " .$email. "";
    ?>

    Missatge rebut, <?php echo $nom ?> <?php echo $cognoms ?>.
    Gracies per contactar. Et respondre a <?php echo $email ?>.
    <form action='index.html' method='get'><button>Tornar</button></form>


    
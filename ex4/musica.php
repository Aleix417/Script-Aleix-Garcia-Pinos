

<?php
    $estil = $_GET["estil"];
    
    switch ($estil) {
        case "pop":
        echo "Amo el pop";
        break;
        case "rock":
        echo "Amo el rock";
        break;
        case "jazz":
        echo "Amo el jazz";
        break;
        case "soul":
        echo "Amo el soul";
        break;
        default:
        echo "No te gusta nada";
    }
?>
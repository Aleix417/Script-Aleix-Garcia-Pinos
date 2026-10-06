

<?php
    $estil = $_GET["estil"];
    
    switch ($estil) {
        case "pop":
        echo "M'agrada el pop";
        break;
        case "rock":
        echo "M'encanta el rock";
        break;
        case "jazz":
        echo "M'agrada el jazz";
        break;
        case "soul":
        echo "M'encanta el soul";
        break;
        default:
        echo "No m'agrada cap dels llistats";
    }
?>
<?php


setcookie('majoredat', $_GET['edat']);
echo $_COOKIE['majoredat'];

setcookie('idioma', $_GET['idioma']);
echo $_COOKIE['idioma'];

setcookie('moneda', $_GET['moneda']);
echo $_COOKIE['moneda'];


?>

<html>
    
<head>

</head>

<body>


    <form action="bodega.php" method="get">
        Ets major d'edat?
        <input type="radio" name="edat" value="si" >Si</input>
        <input type="radio" name="edat" value="no">No</input>
        <br>

        En quin idioma vols veure la informació?
        <input type="radio" name="idioma" value="catala">Català</input>
        <input type="radio" name="idioma" value="espanyol">Espanyol</input>
        <input type="radio" name="idioma" value="espanyol">Anglès</input>
        <br>


        Quin tipus de moneda fas servir?
        <input type="radio" name="moneda" value="Euro">Euro</input>
        <input type="radio" name="moneda" value="Dolar">Dolar</input>
        <input type="radio" name="moneda" value="Lliures">Llures</input>
        <br>

        <input type="submit" value="Enviar">
    </form>
    
</body>

</html>
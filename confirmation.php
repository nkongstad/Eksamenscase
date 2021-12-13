<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bekræftelse</title>
</head>
<body bgcolor="#D3CFCE">

<h2>Tak for din bestilling!</h2>

<?php
        echo "Dit nye møbel sendes til:<br>";
        echo "<br>";
        echo $_POST['navn'];
        echo "<br>";
        echo $_POST['adresse'];
        echo "<br>";
        echo $_POST['etage'];
        echo "<br>";
        echo $_POST['postby'];
        echo "<br>";
        echo $_POST['email'];
        echo "<br>";
        echo $_POST['tlfnr'];
    ?>
    
</body>
</html>
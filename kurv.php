<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kurv</title>
</head>
<body bgcolor="#D3CFCE">

<h1>Din kurv</h1>

    <?php
        echo "Du har tilføjet:";
        echo "<br>";
        echo $_POST['produkt'];
        echo "<br>";
        echo $_POST['træsort'];
        echo "<br>";
        echo $_POST['farve'];
    ?>

<hr>

<form method="post" action="customize.php">

    <input type="submit" value="Tilbage" action="customize.php">
</form>

<form method="post" action="info.php">

    <input type="submit" value="Gå til betaling" action="info.php">
</form>

</body>
</html>









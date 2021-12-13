<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informationer</title>
</head>
<body>
    <h4>Indtast forsendelsesinformationer:</h4>

<form method="post" action="confirmation.php">
    <input type="text" name="navn">Fornavn og efternavn:<br>
    <input type="text" name="adresse">Vejnavn og husnummer:<br>
    <input type="text" name="etage">Etage:<br>
    <input type="text" name="postby">Postnummer og by:<br>
    <input type="text" name="email">Email:<br>
    <input type="text" name="tlfnr">Telefonnummer:<br>

    <input type="submit" value="Køb nu" action="confirmation.php">
 
</form>

<form method="post" action="customize.php">

    <input type="submit" value="Tilbage" action="customize.php">
</form>
    
</body>
</html>
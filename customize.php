<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customize</title>
</head>
<body bgcolor="#D3CFCE">
    <form method="post" action="kurv.php">

        <label for="produkt">Produkt:</label>
        <select name="produkt" for="produkt" action="kurv.php">
        <option value="Vælg" disable selected>Vælg</option>
        <option value="Munin 6360">Munin 6360</option>
        <option value="Nobel 8900">Nobel 8900</option>
        <option value="Gyngestol 183">Gyngestol 183</option>
        </select>

        <br>

        <label for="træsort">Træsort:</label>
        <select name="træsort" for="træsort" action="kurv.php">
        <option value="Vælg">Vælg</option>
        <option value="Egetræ">Egetræ</option>
        <option value="Bøg">Bøg</option>
        <option value="Fyr">Fyr</option>
        <option value="Nødetræ">Nødetræ</option>
        </select>

        <br>

        <label for="farve">Farve:</label>
        <select name="farve" for="farve" action="kurv.php">
        <option value="Vælg">Vælg</option>
        <option value="koksblå">Koksblå</option>
        <option value="lys grå">Lys grå</option>
        <option value="Sort">Sort</option>
        <option value="Sand">Sand</option>
        </select> 

        <br>

        <input type="submit" value="Læg i kurv">



    </form>
    
</body>
</html>
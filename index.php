<?php
include("./functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
    <link rel="stylesheet" href="cards.css">
</head>

<body>
    <header>
        <div class="menu">
            <div class="container">
                <a href="https://farstrup.dk/">FARSTRUP FURNITURE</a>

                <nav>
                    <ul class="menubar">
                        <li><a href="#">Kollektion</a></li>
                        <li><a href="#">Forhandlere</a></li>
                        <li><a href="#">Om os</a></li>
                        <li><a href="#">Kontakt</a></li>
                        <li><a href="#">Contract</a></li>
                        <li><a href="#">Kurv</a></li>
                    
                    </ul>
                </nav>
            </div>
        </div>
    </header>

<hr>

Tilpas:
    <select>
        <option value="Vælg">Vælg</option>
        <option value="Munin 6360">Munin 6360</option>
        <option value="Nobel 8900">Nobel 8900</option>
        <option value="Gyngestol 183">Gyngestol 183</option>
    </select>

    

Træsort:
    <select>
        <option value="Vælg">Vælg</option>
        <option value="Egetræ">Egetræ</option>
        <option value="Bøg">Bøg</option>
        <option value="Fyr">Fyr</option>
        <option value="Nødetræ">Nødetræ</option>
    </select>

Farve:
    <select>
        <option value="Vælg">Vælg</option>
        <option value="koksblå">Koksblå</option>
        <option value="lys grå">Lys grå</option>
        <option value="Sort">Sort</option>
        <option value="Sand">Sand</option>
    </select>

   



<hr>

<main>
    <div class="cards">
        <div class="card">
            <img src="billeder\Munin-04-highres_compressed-e1611741295643-450x550.jpg" alt="Billede" class="cardImg">
            <div class="cardContent">
                <h4>Munin 6360</h4>
                <p class="price">36.455 Kr.</p>
                <p>
                    Sansestimulering og høj siddekomfort forenes i den stilfulde designgyngestol 6360 Munin.
                    Muninstolen er nyskabende og kombinerer stilfuldt dansk design med 110 års møbeltradition og kvalitetshåndværk. Stolen er designet til at give den bedst tænkelige siddekomfort, samtidig med, at den både virker beroligende og sansestimulerende.
                </p>
            </div>
            <div class="cardInfo">
                <a href="#" class="button">Tilpas</a>
                <p><button>Køb nu</button></p>

            </div>
            

            </div>
            <div class="card">
            <img src="billeder\Nobel_8900_skraa_Prod_3vinkler_450x450.png" alt="Billede" class="cardImg">
            <div class="cardContent">
                <h4>Nobel 8900</h4>
                <p class="price">14.995 Kr.</p>
                <p>
                    Nobels smukke, slanke og ædle udtryk passer til en indretning, der værdsætter det enkle udtryk med fokus på materialer i bedste kvalitet. Her er der nemlig tale om et produkt, hvor der er kælet for detaljen. Træets åre står smukt frem og alle samlinger står snorlige – lavet til at holde i generationer.
                </p>
            </div>
            <div class="cardInfo">
                <a href="#" class="button">Tilpas</a>
                <p><button>Køb nu</button></p>

            </div>
            

            </div>
            <div class="card">
            <img src="billeder\Gyngestol_183_1_compressed.jpg" alt="Billede" class="cardImg">
            <div class="cardContent">
                <h4>Gyngestol 183</h4>
                <p class="price">5.760 Kr.</p>
                <p>
                Godt håndværk og stilfuldt design – gyngestol 183 er elegant og unik i sin form. gyngestol 183 er en tidløs designklassiker, der med sit lette udtryk, vil tage sig godt ud i både stuen, spisestuen, køkkenet og på kontoret eller i den hyggelige læsekrog.
                </p>
            </div>
            <div class="cardInfo">
                <a href="#" class="button">Tilpas</a>
                <p><button>Køb nu</button></p>

            </div>
            

            </div>
            
        </div>
    </div>
</main>

</body>

</html>
<?php 

function samletPris($num1, $num2, $num3){
    $value = $num1 + $num2 + $num3;
    return $value;

}

function setBasket(){
    
}

function getBasket(){
    $basket = file_get_contents("./baket.json",);
    $specifications = json_decode($basket, true);
    return $specifications;

}

function saveTo($produkt, $træsort, $farve){
    $specifications = getBasket();
    $specifications[] = $produkt; $træsort; $farve;
    $basket = json_encode($specifications);

    file_put_contents("./basket.json", $basket);

}

function onSave(){
    saveTo($_POST['produkt'] , ['træsort'] , ['farve']);

}

?>
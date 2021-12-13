<?php
function onSave(){
    saveToFile($_POST['note']);
    
}

function saveToFile($note){
    $notesArray = getFromFile();
    $notesArray[] = $note;
    $jsonNotes = json_encode($notesArray);


    file_put_contents("./basket.json", $jsonNotes);
}

function getFromFile() {
    $jsonNotes = file_get_contents("./basket.json");
    $notesArray = json_decode($jsonNotes, true);
    return $notesArray;
}

function deleteItem($index) {
    $notesArray = getFromFile();
    unset($notesArray[$index]);
    $jsonNotes = json_encode($notesArray);

    file_put_contents("./basket.json", $jsonNotes);
    header("Location: index.php");

}


if(isset($_POST["note"])) {
    onSave();
}

if(isset($_GET['i'])){
    deleteItem($_GET['i']);
}

if(isset($_POST["buyMunin"])) {
    onSave();
}


?>
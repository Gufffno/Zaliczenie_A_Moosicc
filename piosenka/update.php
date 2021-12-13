<?php
include "Piosenka.php";
$piosenka=new Piosenka;
if($_POST["submit"]){
    $piosenka->updatePiosenke($_POST,$_GET["id"]);
    
}
$data=$piosenka->wyswietlPiosenke($_GET['id']);
?>
<form method="post">
    <input type="text" placeholder="nazwa" name="nazwa" value="<?=$data["nazwa"]?>">
    <input type="number" placeholder="album_id" name="album_id" value="<?=$data["album_id"]?>">
    <input type="text" placeholder="dlugosc" name="dlugosc" value="<?=$data["dlugosc"]?>">
    <input type="submit" value="Wyślij" name="submit">
</form>
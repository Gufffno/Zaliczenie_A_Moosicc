<?php
include "Piosenka.php";
$piosenka=new Piosenka;
/*if($_POST["submit"]){
    
}*/
?>
<form method="post">
    <input type="text" placeholder="nazwa" name="nazwa">
    <input type="number" placeholder="album id" name="album_id">
    <input type="text" placeholder="długość" name="dlugosc">
    <input type="submit" value="Wyślij" name="submit">
</form>
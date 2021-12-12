<?php
include "Album.php";
$album=new Album;
/*if($_POST["submit"]){
    
}*/
?>
<form method="post">
    <input type="text" placeholder="nazwa" name="nazwa">
    <input type="number" placeholder="rok utworzenia" name="wykonawca_id">
    <input type="text" placeholder="rok wydania" name="rok_wydania">
    <input type="text" placeholder="czas słuchania" name="czas_sluchania">
    <input type="submit" value="Wyślij" name="submit">
</form>
<?php
include "Album.php";
$album=new Album;
if($_POST["submit"]){
    $album->zapiszAlbum($_POST);
}
?>
<form method="post">
    <input type="text" placeholder="nazwa" name="nazwa">
    <input type="number" placeholder="wykonawca_id" name="wykonawca_id">
    <input type="text" placeholder="rok_wydania" name="rok_wydania">
    <input type="text" placeholder="czas_sluchania" name="czas_sluchania">
    <input type="submit" value="Wyślij" name="submit">
</form>
<?php
include "Album.php";
$album=new Album;
if($_POST["submit"]){
    $album->updateAlbum($_POST,$_GET["id"]);
    
}
$data=$album->wyswietlAlbum($_GET['id']);
?>
<form method="post">
    <input type="text" placeholder="nazwa" name="nazwa" value="<?=$data["nazwa"]?>">
    <input type="number" placeholder="wykonawca_id" name="wykonawca_id" value="<?=$data["wykonawca_id"]?>">
    <input type="text" placeholder="rok_wydania" name="rok_wydania" value="<?=$data["rok_wydania"]?>">
    <input type="text" placeholder="czas_sluchania" name="czas_sluchania" value="<?=$data["czas_sluchania"]?>">
    <input type="submit" value="Wyślij" name="submit">
</form>
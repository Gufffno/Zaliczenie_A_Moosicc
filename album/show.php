<?php
include "album.php";
$album=new Album;
$id=($_GET["id"]);
$album->wyswietlAlbum($id);
?>
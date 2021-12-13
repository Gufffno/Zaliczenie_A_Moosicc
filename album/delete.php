<?php
include "Album.php";
$album=new Album;
$album->usunAlbum($_GET["id"]);
?>
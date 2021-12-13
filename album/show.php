<?php
include "Album.php";
$album=new Album;
$id=($_GET["id"]?? "");
$data=$album->wyswietlAlbum($id);
        echo "<br>";
        echo $data["nazwa"];
        echo " ";
        echo $data["wykonawca_id"];
        echo " ";
        echo $data["rok_wydania"];
        echo " ";
        echo $data["czas_sluchania"];
        echo " ";
        echo "<br>";
?>
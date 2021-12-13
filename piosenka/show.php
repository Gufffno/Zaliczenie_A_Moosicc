<?php
include "Piosenka.php";
$piosenka=new Piosenka;
$id=($_GET["id"]?? "");
$data=$piosenka->wyswietlPiosenke($id);
        echo "<br>";
        echo $data["nazwa"];
        echo " ";
        echo $data["album_id"];
        echo " ";
        echo $data["dlugosc"];
        echo "<br>";
?>
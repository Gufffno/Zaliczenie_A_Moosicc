<?php
include "Piosenka.php";
$piosenka=new Piosenka;
$id=($_GET["id"]?? "");
$piosenka->wyswietlPiosenke($id);
?>
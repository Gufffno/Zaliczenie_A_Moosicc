<?php
include "Piosenka.php";
$piosenka=new Piosenka;
$piosenka->usunPiosenke($_GET["id"]);
?>
<?php
include "Wykonawca.php";
$wykonawca=new Wykonawca;
$wykonawca->usunWykonawce($_GET["id"]);
?>
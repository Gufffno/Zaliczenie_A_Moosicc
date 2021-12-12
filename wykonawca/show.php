<?php
include "Wykonawca.php";
$wykonawca=new Wykonawca;
$id=($_GET["id"]);
$wykonawca->wyswietlWykonawce($id);
?>
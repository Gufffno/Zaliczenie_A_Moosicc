<?php
include "Wykonawca.php";
$wykonawca=new Wykonawca;
$id=($_GET["id"]?? "");
$data=$wykonawca->wyswietlWykonawce($id);
        echo "<br>";
        echo $data["nazwa"];
        echo " ";
        echo $data["rok_utworzenia"];
        echo " ";
        echo $data["kraj_pochodzenia"];
        echo "<br>";
?>
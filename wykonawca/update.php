<?php
include "Wykonawca.php";
$wykonawca=new Wykonawca;
if($_POST["submit"]){
    $wykonawca->updateWykonawce($_POST,$_GET["id"]);
    
}
$data=$wykonawca->wyswietlWykonawce($_GET['id']);
?>
<form method="post">
    <input type="text" placeholder="nazwa" name="nazwa" value="<?=$data["nazwa"]?>">
    <input type="number" placeholder="rok utworzenia" name="rok_utworzenia" value="<?=$data["rok_utworzenia"]?>">
    <input type="text" placeholder="kraj pochodzenia" name="kraj_pochodzenia" value="<?=$data["kraj_pochodzenia"]?>">
    <input type="submit" value="Wyślij" name="submit">
</form>
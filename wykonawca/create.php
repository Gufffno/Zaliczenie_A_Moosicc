<?php
include "Wykonawca.php";
$wykonawca=new Wykonawca;
/*if($_POST["submit"]){
    
}*/
?>
<form method="post">
    <input type="text" placeholder="nazwa" name="nazwa">
    <input type="number" placeholder="rok utworzenia" name="rok_utworzenia">
    <input type="text" placeholder="kraj pochodzenia" name="kraj_pochodzenia">
    <input type="submit" value="Wyślij" name="submit">
</form>
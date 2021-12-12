   <?php
   include "Wykonawca.php";
   $wykonawca=new Wykonawca;
   $wykonawca->dodajWykonawce("Imagine Dragons","Las Vegas, Nevada",2008);
   $wykonawca->wyswietlWykonawce(1);
   ?> 
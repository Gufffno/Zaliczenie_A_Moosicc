<?php
   include "Piosenka.php";
   $piosenka=new Piosenka;
   $piosenka->dodajPiosenke("Dupa","7sekund","12");
   $piosenka->wyswietlPiosenke(1);
   ?> 
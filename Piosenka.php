<?php
class Piosenka{
    public $id;
    public $nazwa;
    public $album_id;
    public $dlugosc;

    public function dodajPiosenke($nazwa,$dlugosc,$album_id){
        $this->nazwa=$nazwa;
        $this->dlugosc=$dlugosc;
        $this->album_id=$album_id;
        $this->id=1;
    }
    public function wyswietlPiosenke($id){
        echo $this->nazwa;
        echo "<br>";
        echo $this->dlugosc;
        echo " - ";
        echo $this->album_id;
    }
}
?>
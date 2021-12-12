<?php
class Album{
    public $id;
    public $nazwa;
    public $rok_utworzenia;
    public $kraj_pochodzenia;

    public function dodajAlbum($nazwa,$kraj_pochodzenia,$rok_utworzenia){
        $this->nazwa=$nazwa;
        $this->kraj_pochodzenia=$kraj_pochodzenia;
        $this->rok_utworzenia=$rok_utworzenia;
        $this->id=1;
    }
    public function wyswietlAlbum($id){
        echo $this->nazwa;
        echo "<br>";
        echo $this->kraj_pochodzenia;
        echo " - ";
        echo $this->rok_utworzenia;
    }
}
?>
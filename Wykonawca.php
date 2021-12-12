<?php
class Wykonawca{
    public $id;
    public $nazwa;
    public $rok_utworzenia;
    public $kraj_pochodzenia;

    public function dodajWykonawce($nazwa,$kraj_pochodzenia,$rok_utworzenia){
        $this->nazwa=$nazwa;
        $this->kraj_pochodzenia=$kraj_pochodzenia;
        $this->rok_utworzenia=$rok_utworzenia;
        $this->id=1;
    }
    public function wyswietlWykonawce($id){
        echo $this->nazwa;
        echo "<br>";
        echo $this->kraj_pochodzenia;
        echo " - ";
        echo $this->rok_utworzenia;
    }
}
?>
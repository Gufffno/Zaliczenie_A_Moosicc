<?php
class Album{
    public $id;
    public $nazwa;
    public $wykonawca_id;
    public $rok_wydania;
    public $czas_sluchania;

    public function dodajAlbum($nazwa,$rok_wydania,$wykonawca_id,$czas_sluchania){
        $this->nazwa=$nazwa;
        $this->rok_wydania=$rok_wydania;
        $this->wykonawca_id=$wykonawca_id;
        $this->czas_sluchania=$czas_sluchania;
        $this->id=1;
    }
    public function wyswietlAlbum($id){
        echo $this->nazwa;
        echo "<br>";
        echo $this->rok_wydania;
        echo " - ";
        echo $this->wykonawca_id;
        echo "<br>";
        echo $this->czas_sluchania;
    }
}
?>
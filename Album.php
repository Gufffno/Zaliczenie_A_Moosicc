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
    public function wyswietlAlbumy(){
        include "connect.php";
        include "Wykonawca.php";
        $query="SELECT * FROM `albumy`";
        $result=mysqli_query($conn, $query);
        while($data=mysqli_fetch_assoc($result)){
            echo "<br>";
            echo $data["nazwa"];
            echo " ";
            echo $data["wykonawca_id"];
            echo " ";
            echo $data["czas_sluchania"];
            echo " ";
            echo $data["rok_wydania"];
            echo "<br>";
        }
    }
    public function wyswietlAlbum($id){
        include "connect.php";
        $query="SELECT * FROM `albumy` WHERE `id` = $id";
        $result=mysqli_query($conn,$query);
        $data=mysqli_fetch_assoc($result);
        echo "<br>";
            echo $data["nazwa"];
            echo " ";
            echo $data["wykonawca_id"];
            echo " ";
            echo $data["czas_sluchania"];
            echo " ";
            echo $data["rok_wydania"];
            echo "<br>";
}
}
?>
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
    public function wyswietlPiosenki(){
        include "connect.php";
        $query="SELECT * FROM `piosenki`";
        $result=mysqli_query($conn, $query);
        while($data=mysqli_fetch_assoc($result)){
            echo "<br>";
            echo $data["nazwa"];
            echo " ";
            echo $data["dlugosc"];
            echo " ";
            echo $data["album_id"];
            echo "<br>";
        }
    }
    public function wyswietlPiosenke($id){
        include "connect.php";
        $query="SELECT * FROM `piosenki` WHERE `id` = $id";
        $result=mysqli_query($conn,$query);
        $data=mysqli_fetch_assoc($result);
        echo "<br>";
        echo $data["nazwa"];
        echo " ";
        echo $data["dlugosc"];
        echo " ";
        echo $data["album_id"];
        echo "<br>";
    }
    public function zapiszWykonawce($data){
        include "connect.php";
        
    }
}
?>
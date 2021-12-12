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
    public function wyswietlWykonawcow(){
        include "connect.php";
        $query="SELECT * FROM `wykonawcy`";
        $result=mysqli_query($conn, $query);
        while($data=mysqli_fetch_assoc($result)){
            echo "<br>";
            echo $data["nazwa"];
            echo " ";
            echo $data["rok_utworzenia"];
            echo " ";
            echo $data["kraj_pochodzenia"];
            echo "<br>";
        }
    }
    public function wyswietlWykonawce($id){
        include "connect.php";
        $query="SELECT * FROM `wykonawcy` WHERE `id` = $id";
        $result=mysqli_query($conn,$query);
        $data=mysqli_fetch_assoc($result);
        echo "<br>";
        echo $data["nazwa"];
        echo " ";
        echo $data["rok_utworzenia"];
        echo " ";
        echo $data["kraj_pochodzenia"];
        echo "<br>";
    }
}
?>
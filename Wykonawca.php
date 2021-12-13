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
            echo "  <a href='wykonawca/show/{$data["id"]}'>
                        [show must go on]
                    </a>
                    <a href='wykonawca/update/{$data["id"]}'>
                        [update]
                    </a>
                    <a href='wykonawca/delete/{$data["id"]}'>
                        [usuń]
                    </a>";
        }
    }
    public function wyswietlWykonawce($id){
        include "connect.php";
        $query="SELECT * FROM `wykonawcy` WHERE `id` = $id";
        $result=mysqli_query($conn,$query);
        $data=mysqli_fetch_assoc($result);
        return $data;
    }
    public function zapiszWykonawce($data){
        include "connect.php";
        $query="INSERT INTO `wykonawcy` (`nazwa`, `rok_utworzenia`, `kraj_pochodzenia`) VALUES ('".$data["nazwa"]."','".$data["rok_utworzenia"]."','".$data["kraj_pochodzenia"]."')";
        mysqli_query($conn,$query);
        echo "<br>";
        echo "dodano nowego wykonawce! :D";
    }
    public function updateWykonawce($data,$id){
        include "connect.php";
        $query="UPDATE `wykonawcy` SET `nazwa` ='".$data["nazwa"]."',`rok_utworzenia` = '".$data["rok_utworzenia"]."', `kraj_pochodzenia` ='".$data["kraj_pochodzenia"]."' WHERE `wykonawcy`.`id` = $id;";
        mysqli_query($conn,$query);
        echo "<br>";
        echo "zaktualizowano wykonawce! :D";
    }
    public function usunWykonawce($id){
        include "connect.php";
        $query="DELETE FROM `wykonawcy` WHERE `id` = $id";
        mysqli_query($conn,$query);
        echo "<br>";
        echo "usunięto wykonawce! :D";
    }
}
?>
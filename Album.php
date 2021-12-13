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
            echo "  <a href='albumy/show/{$data["id"]}'>
                        [show must go on]
                    </a>
                    <a href='albumy/update/{$data["id"]}'>
                        [update]
                    </a>
                    <a href='albumy/delete/{$data["id"]}'>
                        [usuń]
                    </a>";
        }
    }
    public function wyswietlAlbum($id){
        include "connect.php";
        $query="SELECT * FROM `albumy` WHERE `id` = $id";
        $result=mysqli_query($conn,$query);
        $data=mysqli_fetch_assoc($result);
        return $data;
    }
    public function zapiszAlbum($data){
        include "connect.php";
        $query="INSERT INTO `albumy` (`nazwa`, `wykonawca_id`, `czas_sluchania`, `rok_wydania`) VALUES ('".$data["nazwa"]."','".$data["wykonawca_id"]."','".$data["czas_sluchania"]."','".$data["rok_wydania"]."')";
        mysqli_query($conn,$query);
        echo "<br>";
        echo "dodano nowego album! :D";
    }
    public function updateAlbum($data,$id){
        include "connect.php";
        $query="UPDATE `albumy` SET `nazwa` ='".$data["nazwa"]."',`wykonawca_id` = '".$data["wykonawca_id"]."', `czas_sluchania` ='".$data["czas_sluchania"]."', `rok_wydania` ='".$data["rok_wydania"]."' WHERE `albumy`.`id` = $id;";
        mysqli_query($conn,$query);
        echo "<br>";
        echo "zaktualizowano album! :D";
    }
    public function usunAlbum($id){
        include "connect.php";
        $query="DELETE FROM `albumy` WHERE `id` = $id";
        mysqli_query($conn,$query);
        echo "<br>";
        echo "usunięto album! :D";
    }
}
?>
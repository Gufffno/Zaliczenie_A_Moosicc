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
            echo "  <a href='piosenka/show/{$data["id"]}'>
                        [show must go on]
                    </a>
                    <a href='piosenka/update/{$data["id"]}'>
                        [update]
                    </a>
                    <a href='piosenka/delete/{$data["id"]}'>
                        [usuń]
                    </a>";
        }
    }
    public function wyswietlPiosenke($id){
        include "connect.php";
        $query="SELECT * FROM `piosenki` WHERE `id` = $id";
        $result=mysqli_query($conn,$query);
        $data=mysqli_fetch_assoc($result);
        return $data;
    }
    public function zapiszPiosenke($data){
        include "connect.php";
        $query="INSERT INTO `piosenki` (`nazwa`, `album_id`, `dlugosc`) VALUES ('".$data["nazwa"]."','".$data["album_id"]."','".$data["dlugosc"]."')";
        mysqli_query($conn,$query);
        echo "<br>";
        echo "dodano nowego piosenke! :D";
    }
    public function updatePiosenke($data,$id){
        include "connect.php";
        $query="UPDATE `piosenki` SET `nazwa` ='".$data["nazwa"]."',`album_id` = '".$data["album_id"]."', `dlugosc` ='".$data["dlugosc"]."' WHERE `piosenki`.`id` = $id;";
        mysqli_query($conn,$query);
        echo "<br>";
        echo "zaktualizowano piosenke! :D";
    }
    public function usunPiosenke($id){
        include "connect.php";
        $query="DELETE FROM `piosenki` WHERE `id` = $id";
        mysqli_query($conn,$query);
        echo "<br>";
        echo "usunięto piosenke! :D";
    }
}
?>
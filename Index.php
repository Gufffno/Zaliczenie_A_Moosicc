<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaliczenie A Moosicc</title>
    <base href="http://localhost/Zaliczenie_A_Moosicc/">
</head>
<body>
    <h1>Moosicc</h1>
    <a href="wykonawcy">    
        [wykonawcy]
    </a>
    <a href='wykonawca/create'>
        [twórz]
    </a>
    <br>
    <a href="albumy">    
        [albumy]
    </a>
    <a href="album/create">
        [twórz]
    </a>
    <br>
    <a href="piosenki">    
        [piosenki]
    </a>
       <a href="piosenka/create">
        [twórz]
    </a>
        <?php
        $url=$_GET["url"]?? "";
echo $url;
        if($url=="wykonawcy"){
            echo " ";
            include "wykonawca/index.php";
        }
        else if($url=="wykonawca/create"){
            echo " ";
            include "wykonawca/create.php";
        }else if($url=="wykonawca/update"){
            echo " ";
            include "wykonawca/update.php";
        }
        else if($url=="wykonawca/show"){
            echo " ";
            include "wykonawca/show.php";
        }
        else if($url=="wykonawca/delete"){
            echo " ";
            include "wykonawca/delete.php";
        }
        else if($url=="albumy/"){
            echo " ";
            include "album/index.php";
        }
        else if($url=="album/create"){
            echo " ";
            include "album/create.php";
        }else if($url=="album/update"){
            echo " ";
            include "album/update.php";
        }
        else if($url=="album/show"){
            echo " ";
            include "album/show.php";
        }
        else if($url=="album/delete"){
            echo " ";
            include "album/delete.php";
        }
        else if($url=="piosenki/"){
            echo " ";
            include "piosenka/index.php";
        }
        else if($url=="piosenka/create"){
            echo " ";
            include "piosenka/create.php";
        }else if($url=="piosenka/update"){
            echo " ";
            include "piosenka/update.php";
        }
        else if($url=="piosenka/show"){
            echo " ";
            include "piosenka/show.php";
        }
        else if($url=="piosenka/delete"){
            echo " ";
            include "piosenka/delete.php";
        }
        ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaliczenie A Moosicc</title>
</head>
<body>
    <h1>Moosicc</h1>
    <a href="wykonawcy">    
        wykonawcy
    </a>
    <a href="wykonawca/show">
        show must go on
    </a>

    <br>
    <a href="albumy">    
        albumy
    </a>
    <br>
    <a href="piosenki">    
        piosenki
    </a>
        <?php
        if($_GET["url"]=="wykonawcy"){
            echo " ";
            include "wykonawca/index.php";
        }
        else if($_GET["url"]=="wykonawca/create"){
            echo " ";
            include "wykonawca/create.php";
        }else if($_GET["url"]=="wykonawca/update"){
            echo " ";
            include "wykonawca/update.php";}
        else if($_GET["url"]=="wykonawca/show"){
            echo " ";
            include "wykonawca/show.php";
        }
        else if($_GET["url"]=="albumy"){
            echo " ";
            include "album/index.php";
        }
        else if($_GET["url"]=="piosenki"){
            echo " ";
            include "piosenka/index.php";
        }
        ?>
</body>
</html>
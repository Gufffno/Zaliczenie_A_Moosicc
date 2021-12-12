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
        [wykonawcy]
    </a>
    <a href="wykonawca/show">
        [show must go on]
    </a>
    <a href="wykonawca/create">
        [twórz]
    </a>
    <br>
    <a href="albumy">    
        [albumy]
    </a>
    <a href="album/show">
        [show must go on]
    </a>
    <a href="album/create">
        [twórz]
    </a>
    <br>
    <a href="piosenki">    
        [piosenki]
    </a>
    <a href="piosenka/show">
        [show must go on]
    </a>
    <a href="piosenka/create">
        [twórz]
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
        else if($_GET["url"]=="album/create"){
            echo " ";
            include "album/create.php";
        }else if($_GET["url"]=="album/update"){
            echo " ";
            include "album/update.php";}
        else if($_GET["url"]=="album/show"){
            echo " ";
            include "album/show.php";
        }
        else if($_GET["url"]=="piosenki"){
            echo " ";
            include "piosenka/index.php";
        }
        else if($_GET["url"]=="piosenka/create"){
            echo " ";
            include "piosenka/create.php";
        }else if($_GET["url"]=="piosenka/update"){
            echo " ";
            include "piosenka/update.php";}
        else if($_GET["url"]=="piosenka/show"){
            echo " ";
            include "piosenka/show.php";
        }
        ?>
</body>
</html>
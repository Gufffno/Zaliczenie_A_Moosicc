<?php
    $host="localhost";
    $user="root";
    $password="";
    $database="moosicc";

    $conn=mysqli_connect($host,$user,$password,$database);
    mysqli_set_charset($conn,"utf8");
?>
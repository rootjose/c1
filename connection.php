<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "users1";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>
<?php
    $servename = "localhost";
    $username = "root";
    $password = "";
    $databasename = "elevate";

    $conn = mysqli_connect ($servename, $username, $password, $databasename);
    if (!$conn){
        die("Konenksi tidak berhasil");
    }
?>
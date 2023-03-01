<?php
$connect = new mysqli("localhost","root","","elevate");
if ($connect) {
    //echo "Connection Succesfull";
} else {
    //echo "Connection failed";
    exit();
}
?>
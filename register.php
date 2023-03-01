<?php
 include "conn.php";

 $username = isset ($_POST['username']) ? $_POST['username'] : "";
 $email = isset ($_POST['email']) ? $_POST['email'] : "";
 $password = md5($_POST['password']);
 $tanggal = date('Y/m/d H:i:s');

 $sql = "INSERT INTO `users` (`id_users`, `username`, `email`, `password`,`register_date`) 
 VALUES ('', '".$username."', '".$email."', '".$password."','".$tanggal."');";

 $query = mysqli_query ($conn, $sql);
 if ($query){
    $response['value']=1;
    $response['messege']="Register succesfully";
    $msg = "Tersimpan";
 } else {
    $msg = "Gagal";
    $response['value']=0;
    $response['messege']="Register denied";
 }

 $response = array (
    'status'=>'OK',
    'msg'=> $msg
 );

echo json_encode($response);
?>
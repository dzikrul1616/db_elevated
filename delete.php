<?php
 include "conn.php";

 $id_content = isset($_POST['id_content']) ? $_POST['id_content'] : "";
 $sql = "DELETE FROM `content` WHERE `id_content` = '$id_content'";

 $query = mysqli_query ($conn, $sql);

 if ($query){
    $msg = "Berhasil dihapus";
 } else {
    $msg = "Gagal dihapus";
 }

 $response = array (
    'status'=>'OK',
    'msg'=> $msg
 );

echo json_encode($response);
?>

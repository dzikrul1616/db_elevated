<?php
 include "conn.php";

 $title = isset ($_POST['title']) ? $_POST['title'] : "";
 $price = isset ($_POST['price']) ? $_POST['price'] : "";
 $description = isset ($_POST['description']) ? $_POST['description'] : "";
 $tanggal = date('Y/m/d H:i:s');
 $id_content = isset ($_POST['id_content']) ? $_POST['id_content'] : "";
 $tanggal = date('Y/m/d H:i:s');
 $image = date('dmYHis').str_replace(" ","",basename($_FILES['image']['name']));
 $imagepath = "upload/".$image;
 move_uploaded_file($_FILES['image']['tmp_name'],$imagepath);

 $sql = "UPDATE `content` SET `title`='".$title."', `price`='".$price."', `description`='".$description."', `date_content`='".$tanggal."', `image`='".$image."' WHERE `id_content`='".$id_content."';";

 $query = mysqli_query ($conn, $sql);
 if ($query){
    $msg = "Terupdate";
 } else {
    $msg = "Gagal";
 }

 $response = array (
    'status'=>'OK',
    'msg'=> $msg
 );

echo json_encode($response);
?>
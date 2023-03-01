    <?php
    include "conn.php";

    $title = isset ($_POST['title']) ? $_POST['title'] : "";
    $description = isset ($_POST['description']) ? $_POST['description'] : "";
    $tanggal = date('Y/m/d H:i:s');
    $id_users = isset ($_POST['id_users']) ? $_POST['id_users'] : "";
    $price = isset ($_POST['price']) ? $_POST['price'] : "";
    $tanggal = date('Y/m/d H:i:s');
    $image = date('dmYHis').str_replace(" ","",basename($_FILES['image']['name']));
    $imagepath = "upload/".$image;
    move_uploaded_file($_FILES['image']['tmp_name'],$imagepath);

    $sql = "INSERT INTO `content` (`id_content`, `image`, `title`,`description`, `price`,  `date_content`, `id_users`) 
    VALUES ('', '".$image."', '".$title."', '".$description."', '".$price."', '".$tanggal."','".$id_users."');";

    $query = mysqli_query ($conn, $sql);
    if ($query){
        $msg = "Tersimpan";
    } else {
        $msg = "Gagal";
    }

    $response = array (
        'status'=>'OK',
        'msg'=> $msg
    );

    echo json_encode($response);
    ?>
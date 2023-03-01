<?php 
    require "../elevated/connect.php";
    $response = array();
    $sql = mysqli_query($connect,"SELECT a.*, b.username FROM content a LEFT JOIN users b on a.id_users= b.id_users ORDER BY a.id_users DESC");

    while ($a= mysqli_fetch_array($sql)) {
        $b['id_content'] = $a['id_content'];
        $b['image'] = $a['image'];
        $b['title'] = $a['title'];
        $b['price'] = $a['price'];
        $b['description'] = $a['description'];
        $b['date_content'] = $a['date_content'];
        $b['id_users'] = $a['id_users'];
        $b['username'] = $a['username'];
        array_push($response, $b);
    }
    echo json_encode($response);
?>
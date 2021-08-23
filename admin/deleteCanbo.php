<?php
    include("config/db.php");

    $id_can_xoa = $_GET['id'];

    $sql = "DELETE FROM canbo WHERE id=$id_can_xoa";
    $result = mysqli_query($conn,$sql);

    if($result == true){
        header('location:'.siteurl.'/admin/index.php');
    }

?>
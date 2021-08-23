<?php
    include("config/db.php");

    $id = $_GET['id_Dvi'];

    $sql = "DELETE FROM coquan WHERE id_Dvi=$id";

    $result = mysqli_query($conn,$sql);

    if($result = true){
        header('location:'.siteurl.'/admin/index.php');
    }

?>
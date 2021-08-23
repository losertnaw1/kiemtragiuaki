<?php
    // Bước 01: Kết nối Server:
    //Định nghĩa Hằng số trong PHP
    define('siteurl','http://localhost/kiemtragiuaki');
    define('host','localhost');
    define('user','root');
    define('pass','');
    define('db_name','db_danhba');
    define('PORT','3306');
    $conn = mysqli_connect(host,user,pass,db_name);
    if(!$conn){
        die("Không thể kết nối: ".mysqli_connect_error());
    }
?>
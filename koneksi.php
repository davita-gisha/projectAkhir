<?php
    // membuat koneksi php ke database
    //mysqli(source, username, password, nama_db)

    $db = new mysqli("localhost", "root", "", "buns");
    if (mysqli_connect_errno()){
        echo "Error : " . mysqli_connect_error();
    }else{
        //echo "success";
    }

?>
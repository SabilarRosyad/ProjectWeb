<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "prak";

    $connect = mysqli_connect ($hostname, $username, $password, $database);

    if($connect){
        echo "Koneksi ke MySQL berhasil";
    }
    else{
        echo "Koneksi ke MySQL gagal <br>" . mysqli_connect_error();
    }

    $sql = "create table product (
            id INT PRIMARY KEY,
            product_name VARCHAR(30) NOT NULL,
            harga INT NOT NULL)";

    if(mysqli_query($connect, $sql)){
        echo "Table product berhasil dibuat";
    }
    else{
        echo "Table product gagal dibuat <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
    ?>
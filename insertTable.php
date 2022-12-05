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

    $sql = "INSERT INTO user (id, nama, harga)
            VALUE (1, 'Pensil', 3000)";

    if(mysqli_query($connect, $sql)){
        echo "Data berhasil ditambahkan";
    }
    else{
        echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
    ?>
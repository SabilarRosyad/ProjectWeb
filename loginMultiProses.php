<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    
    if($row['LEVEL'] == 1){
        echo "Anda berhasil login, silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman home</a>
    <?php
    }else if($row['LEVEL'] == 2){
        echo "Anda berhasil login, silahkan menuju "; ?>
        <a href="homeGuest.html">Halaman home</a>
    <?php
    }else{
        echo "Anda gagal login. silahkan login ulang";?>
        <a href="loginForm.html">Login kembali</a>
    <?php
        echo mysqli_error($connect);
    }
?>
<html>
    <head>
    </head>
    <body>
        <h2> Keranjang Belanja </h2>

        <?php
            $beliNovel = $_COOKIE['beliNovel'];
            $beliBuku = $_COOKIE['beliBuku'];

            echo "jumlah novel : " . $beliNovel ."<br>";
            echo "jumlah buku : " . $beliBuku;
        ?>
    </body>
</html>
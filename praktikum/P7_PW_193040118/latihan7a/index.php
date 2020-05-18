<?php

    // menghubungkan dengan file php lainya
    require 'php/functions.php';

    //melakukan query
    $buku = query("SELECT * FROM buku");

    // Tugas no 2
    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $makanan = query("SELECT * FROM buku WHERE
                    img LIKE '%$keyword%' OR
                    judulbuku LIKE '%$keyword%' OR
                    pengarang LIKE '%$keyword%' OR
                    tahunterbitan LIKE '%$keyword%' OR
                    rating LIKE '%$keyword%'  ");
    } else {
        $buku = query("SELECT * FROM buku");
    }


   
?>

<html>
<head>
    <title>Tugas</title>
    <style>
        img{ width:145px; padding:25px; }
        td{ text-align : center; }
    </style>
</head>
<body>


    <!-- Tugas No 2 : Tambahkan kolom pencarian pada halaman front-end(index) dari web kalian.   -->

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>




    <?php if(empty($buku)) : ?>
    <div>
            <h1>Data Tidak Ditemukan</h1>
    </div>
    <?php else : ?>
        <div class="container">
            <?php foreach ($buku as $buku) : ?>
                <p class="judulbuku">
                    <a href="php/detail.php?id=<?= $buku['id'] ?>">
                        <?= $buku["judulbuku"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
        <?php endif;?>

    <a href="php/login.php">
        <button type="">KE HALAMAN ADMIN</button>
    </a>

</body>
</html>
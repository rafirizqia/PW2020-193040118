<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// menghubungkan dengan file php lainya
require 'functions.php';
// melakukan query
$buku = query ( "SELECT * FROM  buku" );

if(isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $buku = query("SELECT * FROM buku WHERE
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
    <title>Latihan7c</title>
    <style>
        img{
            width : 150px;
        }
    </style>
</head>
<body>
    
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div> 
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
        <button type="submit"><a href="../index.php" style="text-decoration : none; color : black;">Kembali</a></button>
    </form>

   


    <table border="1" cellpadding ="13" cellspacing="0">
        <tr>
            <th>NO</th>
            <th>OPSI</th>
            <th>GAMBAR</th>
            <th>JUDUL BUKU</th>
            <th>PENGARANG</th>
            <th>TAHUN TERBITAN</th>
            <th>RATING</th>
        </tr>


    <?php if(empty($buku)) : ?>
    <tr>
        <td colspan="7">
            <h1>Data Tidak Ditemukan</h1>
        </td>
    </tr>
    <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($buku as $buku) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $buku['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $buku['id']?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $buku['img']?>" alt=""></td>
                <td><?= $buku['judulbuku']?></td>
                <td><?= $buku['pengarang']?></td>
                <td><?= $buku['tahunterbitan']?></td>
                <td><?= $buku['rating']?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    <?php endif;?>
    </table>

</body>
</html>
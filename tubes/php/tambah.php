<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

    require 'functions.php';

    if(isset($_POST['tambah'])) {
        if(tambah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>
            ";
        }
    }
?>

<h3>Form Tambah Data Buku</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="judulbuku">Judul Buku: </label><br>
            <input type="text" name = "judulbuku" id="judulbuku" required><br><br>
        </li>
        <li>
            <label for="pengarang">Pengarang: </label><br>
            <input type="text" name = "pengarang" id="pengarang" required><br><br>
        </li>
        <li>
            <label for="tahunterbitan">Tahun Terbitan: </label><br>
            <input type="text" name = "tahunterbitan" id="tahunterbitan" required><br><br>
        </li>
        <li>
            <label for="rating">Rating: </label><br>
            <input type="text" name = "rating" id="rating" required><br><br>
        </li>
        <li>
            <label for="img">Gambar: </label><br>
            <input type="text" name = "img" id="img" required><br><br>
        </li>
        <li>
            <br>
            <button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration : none; color : black;">Kembali</a>
            </button>
        </li>
    </ul>
</form>
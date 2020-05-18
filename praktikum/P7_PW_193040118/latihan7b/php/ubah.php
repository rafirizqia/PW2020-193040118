<?php
    require 'functions.php';

    // ambil id dari url admin.php
    $id = $_GET['id'];

    //query mahasiswa berdasarkan id
    $mkn = query("SELECT * FROM buku WHERE id = $id")[0];
    // var_dump($buku);

    //memastikan kalau tombol ubah sudah ditekan
    if(isset($_POST['ubah'])) {
        if(ubah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
            </script>
            ";
        }
    }
?>

<h3>Form Ubah Data Buku</h3>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $buku['id']?>">
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
            <button type="submit" name="ubah">Ubah Data</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration : none; color : black;">Kembali</a>
            </button>
        </li>
    </ul>
</form>
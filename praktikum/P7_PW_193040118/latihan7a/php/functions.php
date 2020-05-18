<?php

//function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost" , "root" , "") or die("Koneksi ke DB Gagal");
    mysqli_select_db($conn, "pw_193040118") or die("Database Salah!");
    
    return $conn;
}

//function untuk melakukan query ke database
function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
    $rows [] = $row;
  }
  return $rows;
}
//functions untuk menambahkan data didalam database
function tambah($data) {
    $conn = koneksi();

    $gambar             = htmlspecialchars($data['gambar']);
    $judulbuku            = htmlspecialchars($data['judulbuku']);
    $pengarang            = htmlspecialchars($data['pengarang']);
    $tahunterbitan   = htmlspecialchars($data['tahunterbitan']);
    $rating     = htmlspecialchars($data['rating']);

    $query = "INSERT INTO buku
                VALUES 
                ('','$gambar','$judulbuku','$pengarang','$tahunterbitan' , '$rating')";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}

//functions untuk menghapus data 
function hapus($id){
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}

//functions untuk menambahkan data didalam database
function ubah($data) {
    $conn = koneksi();

    $id             = $data['id'];
    $img            = htmlspecialchars($data['img']);
    $judulbuku            = htmlspecialchars($data['judulbuku']);
    $pengarang            = htmlspecialchars($data['pengarang']);
    $tahunterbitan  = htmlspecialchars($data['tahunterbitan']);
    $rating     = htmlspecialchars($data['rating']);

    $query = "UPDATE buku SET
            img = '$img',
            nama = '$judulbuku',
            asal = '$pengarang',
            harga_pasaran = '$tahunterbitan',
            bahan_dasar = '$rating'
            WHERE id = $id
    ";
    
    mysqli_query($conn , $query);

    return mysqli_affected_rows($conn);
}





?>
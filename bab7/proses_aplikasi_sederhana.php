<?php
include "koneksi.php";

$save = mysqli_query($koneksi, "INSERT INTO dbdisiswa(nama,kelas,alamat)
VALUES('$_POST='nama','$_POST='kelas','$_POST='alamat')");

if($save)
{
 echo "data berhasil disimpan";
} else{

  echo "data gagal disimpan";
}

 ?>

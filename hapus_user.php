<?php
// memasukkan file kedalam dokumen
include "koneksi.php";
// variabel untuk menghapus data denganr id
$sql = "DELETE from users where id_user= '$_GET[id]'";
// fungsi untuk menghubungkan koneksi ke database
mysqli_query($con, $sql);
// fungsi untuk menutup koneksi database
mysqli_close($conn);
header('location:tampil_user.php');

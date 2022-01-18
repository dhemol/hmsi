<?php
//panggil file config.php untuk menghubung ke server
include('../inc/koneksi.php');
 
//tangkap data dari form
$isi_profil = $_POST['isi_profil'];
$img_profil = $_POST['img_profil'];
$modified_date = $_POST['modified_date'];

//simpan data ke database
$query = mysqli_query($con, "INSERT INTO profil VALUES('', '$isi_profil', '$img_profil', '$modified_date')") or die(mysqli_error());
 
if ($query) {
    header('location:profil.php?message=success');
}
?>
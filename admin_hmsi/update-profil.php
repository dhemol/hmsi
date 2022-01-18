<?php
//panggil file config.php untuk menghubung ke server
include('../inc/koneksi.php');
 
//tangkap data dari form
$id = $_POST['id'];
$isi_profil = $_POST['isi_profil'];
$img_profil = $_POST['img_profil'];
$modified_date = $_POST['modified_date'];

//simpan data ke database
$query = mysqli_query($con,"UPDATE profil SET id='$id', isi_profil='$isi_profil', img_profil='$img_profil', modified_date='$modified_date' WHERE id='$id'") or die(mysqli_error());
 
if ($query) {
    header('location:profil.php?message=update');
}
?>
<?php
//panggil file config.php untuk menghubung ke server
include('../inc/koneksi.php');
 
//tangkap data dari form
$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$pesan = $_POST['pesan'];

//simpan data ke database
$query = mysqli_query($con,"UPDATE hubungi SET id='$id', nama_lengkap='$nama_lengkap', subject='$subject', Email='$Email', no_hp='$no_hp', pesan='$pesan' where id='$id'") or die(mysqli_error());
 
if ($query) {
    header('location:pesan.php?message=update');
}
?>
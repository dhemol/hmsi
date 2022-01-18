<?php
//panggil file config.php untuk menghubung ke server
include('../inc/koneksi.php');
 
//tangkap data dari form
$id = $_POST['id'];
$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];
$Email = $_POST['Email'];
$password = $_POST['password'];

//simpan data ke database
$query = mysqli_query($con,"UPDATE admin_hmsi SET id='$id', username='$username', nama_lengkap='$nama_lengkap', Email='$Email', password='$password' where id='$id'") or die(mysqli_error());
 
if ($query) {
    header('location:user.php?message=update');
}
?>
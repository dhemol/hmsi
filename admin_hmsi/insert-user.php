<?php
//panggil file config.php untuk menghubung ke server
include('../inc/koneksi.php');
 
//tangkap data dari form
$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];
$Email = $_POST['Email'];
$password = $_POST['password'];

//simpan data ke database
$query = mysqli_query($con, "INSERT INTO admin_hmsi VALUES('', '$username', '$nama_lengkap', '$Email', '$password')") or die(mysqli_error());
 
if ($query) {
    header('location:user.php?message=success');
}
?>
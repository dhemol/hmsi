<?php
//panggil file config.php untuk menghubung ke server
include('inc/koneksi.php');
 
//tangkap data dari form
$nama_lengkap = $_POST['nama_lengkap'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$pesan = $_POST['pesan'];   

//simpan data ke database
$query = mysqli_query($con, "INSERT INTO hubungi VALUES('', '$nama_lengkap', '$subject', '$email', '$no_hp', '$pesan')") or die(mysqli_error());
 
if ($query) {
    header('location:contactus.php?message=success');
}
?>
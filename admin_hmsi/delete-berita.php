<?php
include('../inc/koneksi.php');
include('cek-login.php');

$id = $_GET['id'];
 
$query = mysqli_query($con,"delete from berita where id_berita='$id'") or die(mysqli_error());
 
if ($query) {
    header('location:berita.php?message=delete');
}
?>
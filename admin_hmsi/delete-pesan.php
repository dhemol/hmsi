<?php

include('../inc/koneksi.php');
include('cek-login.php');

$id = $_GET['id'];
 
$query = mysqli_query($con,"DELETE FROM hubungi where id='$id'") or die(mysqli_error());
 
if ($query) {
    header('location:pesan.php?message=delete');
}
?>
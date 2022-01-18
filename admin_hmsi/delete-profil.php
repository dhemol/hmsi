<?php

include('../inc/koneksi.php');
include('cek-login.php');

$id = $_GET['id'];
 
$query = mysqli_query($con,"DELETE FROM profil where id='$id'") or die(mysqli_error());
 
if ($query) {
    header('location:profil.php?message=delete');
}
?>
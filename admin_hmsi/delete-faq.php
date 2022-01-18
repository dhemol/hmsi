<?php

include('../inc/koneksi.php');
include('cek-login.php');

$id = $_GET['id'];
 
$query = mysqli_query($con,"DELETE FROM faq where id='$id'") or die(mysqli_error());
 
if ($query) {
    header('location:faq.php?message=delete');
}
?>
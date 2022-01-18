<?php
//panggil file config.php untuk menghubung ke server
include('../inc/koneksi.php');
 
//tangkap data dari form
$question = $_POST['question'];
$answer = $_POST['answer'];

//simpan data ke database
$query = mysqli_query($con, "INSERT INTO faq VALUES('', '$question', '$answer')") or die(mysqli_error());
 
if ($query) {
    header('location:faq.php?message=success');
}
?>
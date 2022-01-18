<?php
//panggil file config.php untuk menghubung ke server
include('../inc/koneksi.php');
 
//tangkap data dari form
$id = $_POST['id'];
$question = $_POST['question'];
$answer = $_POST['answer'];

//simpan data ke database
$query = mysqli_query($con,"UPDATE faq SET id='$id', question='$question', answer='$answer' WHERE id='$id'") or die(mysqli_error());
 
if ($query) {
    header('location:faq.php?message=update');
}
?>
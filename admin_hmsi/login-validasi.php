<?php
include('../inc/koneksi.php');
 
session_start();
 
//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysqli_escape_string($con, $username);
$password = mysqli_escape_string($con, $password);
 
//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
    //kalau username dan password kosong
    header('location:login.php?error=1');
    
} else if (empty($username)) {
    //kalau username saja yang kosong
    header('location:login.php?error=2');
    
} else if (empty($password)) {
    //kalau password saja yang kosong
    //redirect ke halaman index
    header('location:login.php?error=3');
    
}

$q = mysqli_query($con, "SELECT * FROM admin_hmsi WHERE username = '$username'");
$r = mysqli_fetch_assoc($q);

if (mysqli_num_rows($q) === 1) {

	if ($password == $r['password'] ) {

    //kalau username dan password sudah terdaftar di database
	 $_SESSION['username'] = $username;
    // header('location:index.php');
	 echo "<script>location='index.php';</script>";
    exit();

    } else {
    	header('location:login.php?error=4');
    }
} else {
    //kalau username ataupun password tidak terdaftar di database
    header('location:login.php?error=4');
}
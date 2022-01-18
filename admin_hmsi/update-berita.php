<?php
//panggil file config.php untuk menghubung ke server
include('../inc/koneksi.php');

//tempat menyimpan file
$namafolder="../gambar/"; 

//tangkap data dari form
if (!empty($_FILES["gambar_berita"]["tmp_name"]))
{
	//tangkap data dari form
    $id_berita = $_POST['id_berita'];
	$id_kategori = $_POST['id_kategori'];
	$headnews = $_POST['headnews'];
	$isi_berita = $_POST['isi_berita'];
	$pic_berita = $_POST['pic_berita'];
    $created_date = $_POST['created_date'];
    $created_time = $_POST['created_time'];
    $modified_date = $_POST['modified_date'];
    $event_date = $_POST['event_date'];	
	$gambar_berita = $_FILES['gambar_berita']['type'];
    
	if($gambar_berita == "image/jpeg" || $gambar_berita == "image/jpg" || $gambar_berita == "image/gif" || $gambar_berita == "image/x-png")
    {           
        $gambar = $namafolder . basename($_FILES['gambar_berita']['name']);
		       
        if (move_uploaded_file($_FILES['gambar_berita']['tmp_name'], $gambar)) 
		{
			//simpan data ke database
			$query = mysqli_query($con,"UPDATE berita SET headnews='$headnews', pic_berita='$pic_berita', isi_berita='$isi_berita', id_berita='$id_berita', id_kategori='$id_kategori', created_date='$created_date', created_time='$created_time', modified_date='$modified_date', modified_time='$modified_time', gambar_berita='$gambar' where id_berita='$id_berita'") or die(mysqli_error());
	
            if ($query) 
			{
				header('location:berita.php?message=update');
			}
        } 
		else 
		{
           echo "Gambar gagal dikirim";
        }
   } 
   else 
   {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} 
else {
    echo "Anda belum memilih gambar";
}
	
?>
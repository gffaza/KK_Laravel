<?php
	include 'koneksi.php';

	//mengatasi undefined variabel
	$judul_cerita = $topik_cerita = $isi_cerita = $tanggal = $nama_foto = "";

	if(isset($_POST['unggah'])){
		$judul_cerita = $_POST['judul'];
		$topik_cerita = $_POST['topik'];
		$isi_cerita = $_POST['body'];
		$tanggal = date("y-m-d h:i:s");

		// //isi foto
		$nama_foto = @$_FILES['gambar']['name'];
		$sumber_foto = @$_FILES['gambar']['tmp_name'];
		$folder = 'src/thumbnail/';

		//memindahkan foto ke folder
		move_uploaded_file($sumber_foto, $folder .$nama_foto);

		//memasukan data ke database
		$query1 = "INSERT INTO cerita VALUES ('', '$judul_cerita', '$topik_cerita', '$isi_cerita', '$nama_foto', '$tanggal')";

		

		if (mysqli_query($koneksi, $query1)) {
			header("Location: profil.php");
			exit;
 		}
		else {
			echo "Gagal insert data";
		exit;
		}

	}

?>
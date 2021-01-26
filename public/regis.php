<?php
	include 'koneksi.php';	

	//mencegah error undefined variabel
	$username = $email = $password = $status = $nama_foto = "";




	function registrasi($data){
		global $koneksi;

		//menyimpan data penulis dalam variabel
		$username = stripcslashes($data['username']);
		$email = stripcslashes($data['email']);	
		$password = stripcslashes($data['password']);
		$conpass = stripcslashes($data['confirmpass']);
		$status = stripcslashes($data['status']);
		$instansi = stripcslashes($data['instansi']);	

		//membuat folder untuk menyimpan foto ktm
		$nama_foto = @$_FILES['foto']['name'];
		$sumber_foto = @$_FILES['foto']['tmp_name'];
		$folder = 'src/foto_ktm/';
		//memindahkan ke foto dalam folder
		move_uploaded_file($sumber_foto, $folder .$nama_foto);
		
		// cek username sudah ada atau belum'
		$result = mysqli_query($koneksi, "SELECT username FROM penulis WHERE username = '$username' ");

		if(mysqli_fetch_assoc($result)){
			echo "<script>
					alert('Username sudah ada')
				</script>";
			return false;
		}

		//melakukan enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		//memasukan data ke dalam database tabel penulis
		$query = "INSERT INTO penulis VALUES (
				'' ,'$username', '$email', '$password', '$status', '$instansi', '$nama_foto')";

		$hasil = mysqli_query($koneksi, $query);

		if ($hasil) {
			echo "Berhasil insert data";
			header("Location: login.php");
		exit;
 		}
		else {
			echo "Gagal insert data";
		exit;
		}
	}
?>
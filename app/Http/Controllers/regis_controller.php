<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penulis;
use Illuminate\Database\Eloqueent\Model;

class regis_controller extends Controller
{
    //fungsi registrasi
    public function registrasi(Request $request){

        //mencegah error undefined variabel
        $username = $email = $password = $status = $instansi = "";
        
        //menyimpan data penulis dalam variabel
		$username = stripcslashes($request['username']);
		$email = stripcslashes($request['email']);	
		$password = stripcslashes($request['password']);
		$conpass = stripcslashes($request['confirmpass']);
		$status = stripcslashes($request['status']);
        $instansi = stripcslashes($request['instansi']);	
        
        // menyimpan data foto ktm yang diupload ke variabel $foto_ktm
        $file = $request-> file('foto');
		$foto_ktm = $request-> file('foto');
		$nama_file = time()."_".$foto_ktm->getClientOriginalName();
 
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'src/foto_ktm/';
		$file->move($tujuan_upload,$nama_file);
        
        // cek username sudah ada atau belum'
        // $result = penulis::where('username', $username);
        
		// if(mysqli_fetch_assoc($result)){
		// 	echo "<script>
		// 			alert('Username sudah ada')
		// 		</script>";
		// 	return false;
		// }

		//melakukan enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        //insert data ke dalam tabel
        penulis::create([
            'username' => $username,
            'email' => $email,
            'pass' => $password,
            'status' => $status,
            'instansi' => $instansi,
            'foto_ktm' => $nama_file,
        ]);

        return view('login');
    }
}

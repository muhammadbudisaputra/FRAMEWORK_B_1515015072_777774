<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $mahasiswa = Mahasiswa::find(1);
        //dd($Mahasiswa);
    echo "Nama:".$mahasiswa->nama;
    echo"<br>";
    echo "Username:".$mahasiswa->pengguna->username;
    }
    public function awal(){
    	return "Hello dari MahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = "Budi Saputra";
    	$mahasiswa->nim = "072";
    	$mahasiswa->alamat = "Samarinda";
    	$mahasiswa->pengguna_id = 3;
    	$mahasiswa->save();
    	return "Data Mahasiswa dengan Nama {$mahasiswa->nama} telah disimpan";
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
     public function awal()
    {
    	return "Data Dosen Aman";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama = 'Muhammad';
    	$dosen->nip = 'NIP001';
    	$dosen->alamat = 'Jl. Unmul';
    	$dosen->pengguna_id = 'PG001';
    	$dosen->save();
    	return"Data Dengan Nama {$dosen->nama} Telah Disimpan";
	}
}
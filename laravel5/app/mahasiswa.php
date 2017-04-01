<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa'; //Mengambil data dari table Mahasiswa
    public function Pengguna() //Fungsi dengan nama Pengguna
  	{
		return $this->belongsTo(pengguna::class); //Memberikan nilai return dari fungsi belongsTo yang merelasikan Mahasiswa dengan Pengguna
	}
    public function Jadwal_mataKuliah()//Fungsi dengan nama Jadwal_matakuliah
    {
    	return $this->hasMany(JadwalMataKuliah::class,'Mahasiswa_id'); //Memberika nilai return dari fungsi hasMany yang merelasikan Mahasiswa dengan banyak Jadwal_matakuliah dengan foreign key Mahasiswa_id
    }
}


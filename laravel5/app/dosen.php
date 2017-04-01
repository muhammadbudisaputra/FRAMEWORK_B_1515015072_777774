<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'Dosen'; //Mengambil data dari table Dosen
    public function Pengguna() //Fungsi dengan nama Pengguna
	{
		return $this->belongsTo(Pengguna::class); //Fungsi Pengguna yang mempunyai nilai return dari fungsi belongsTo yang merelasikan tabel Pengguna dengan model dosen.
	}
	public function Dosen_matakuliah() //Fungsi dengan nama Dosen_matakuliah
	{
		return $this->hasMany(Dosen_matakuliah::class,'Dosen_id'); //Model Dosen_matakuliah yang mempunyai nilai return dari fungsi hasMany yang merelasikan Dosen dengan banyak Dosen_matakuliah dengan Dosen_id sebagai foreign key nya.
	}
}

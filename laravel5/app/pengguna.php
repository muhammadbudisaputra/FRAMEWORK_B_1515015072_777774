<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'Pengguna'; //Mengambil data dari table Pengguna

    public function Dosen() //Fungsi dengan nama Dosen
	{
		return $this->hasOne(Dosen::class,'Pengguna_id');//Memberikan nilai return dari fungsi hasOne yang merelasikan pengguna dengan Dosen dengan foreign key Pengguna_id
	}
	public function Mahasiswa() //Fungsi dengan nama Mahasiswa
	{
		return $this->hasOne(Mahasiswa::class,'Pengguna_id');//Memberikan nilai return dari fungsi hasOne yang merelasikan pengguna dengan Mahasiswa dengan foreign key Pengguna_id
    }
	}
	// public function Peran();
	// {
	// 	return this->belongsToMany(Peran::class);
	// }
}

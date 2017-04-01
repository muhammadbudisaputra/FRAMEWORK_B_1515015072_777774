<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'Ruangan'; //Mengambil data dari table Ruangan
    public function Jadwal_mataKuliah() //Fungsi dengan nama Jadwal_matakuliah
    {
    	return $this->hasMany(JadwalMataKuliah::class,'Ruangan_id');//Memberikan nilai return dari fungsi hasMany dengan merelasikan Ruangan dengan banyak Jadwal_matakuliah dengan foreign key Ruangan_id
    }
}


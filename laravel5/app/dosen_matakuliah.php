<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_matakuliah extends Model
{
        protected $table = 'Dosen_matakuliah'; //Mengambil data dari table Dosen_matakuliah

    protected $fillable = ['dosen_id','matakuliah_id'];
    }
	public function Dosen() //Fungsi dengan nama Dosen
    {
    	return $this->belongsTo(Dosen::class); //Memberikan nilai return dari fungsi belongsTo yang  merelasikan model Dosen dengan model Dosen_matakuliah
    }
    public function Matakuliah() //Fungsi dengan nama Matakuliah
    {
    	return $this->belongsTo(MataKuliah::class); //Memberikan nilai return dari fungsi belongsTo yang merelasikan banyak model Dosen_matakuliah dengan model Matakuliah
    }
    public function Jadwal_matakuliah(){ //Fungsi dengan nama Jadwal_matakuliah
    	return $this->hasMany(JadwalMataKuliah::class,'Dosen_matakuliah_id'); //Memberikan nilai return dari fungsi hasMany yang merelasikan model Dosen_matakuliah dengan banyak model Jadwal_matakuliah dengan foreign key Dosen_matakuliah_id
    }
}


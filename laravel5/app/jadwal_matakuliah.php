<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_matakuliah extends Model
{
   protected $table = 'Jadwal_matakuliah'; //Mengambil data dari table Jadwal+matakuliah
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];
  }
	 public function Mahasiswa() //Fungsi dengan nama Mahasiswa
   {
    	return $this->belongsTo(Mahasiswa::class); //Memberikan nilai return dari fungsi belongsTo yang merelasikan Dosen_matakuliah dengan banyak Jadwal_Matakuliah
   }
   public function Ruangan() //Fungsi dengan nama Ruangan
   {
    	return $this->belongsTo(Ruangan::class); //Memberikan nilai return dari fungsi belongsTo yang mrelasikan ruangan dengan banyak Jadwal_matakuliah
   }
   public function Dosen_mataKuliah() //Fungsi dengan nama Dosen_matakuliah
   {
    	return $this->belongsTo(DosenMatakuliah::class); //Memberikan nilai return dari fungsi belongsTo yang merelasikan banyak Jadwal_matakuliah dengan mahasiswa
   }
    
}

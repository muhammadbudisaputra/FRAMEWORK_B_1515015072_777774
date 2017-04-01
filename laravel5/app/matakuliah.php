<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
	protected $table = 'Matakuliah'; //Mengambil data dari table Matakuliah
	{
	public function Dosen_matakuliah() //Fungsi dengan nama Dosen_matakuliah
	{
    	return $this->hasMany(DosenMataKuliah::class,'Matakuliah_id');//Memberikan nillai return dari fungsi hasMany yang merelasikan Matakuliah dengan banyak Dosen_matakuliah dengan foreign key Matakuliah_id
    }
    
}


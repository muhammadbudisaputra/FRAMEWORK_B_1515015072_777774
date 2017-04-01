<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    protected $table = 'peran';
	
	public function Pengguna();
	{
		return this->belongsToMany(pengguna::class);
	}
}

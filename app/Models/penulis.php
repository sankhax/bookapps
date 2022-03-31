<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    use HasFactory;
	
	protected $table = 'penulis'; 
	
	public function buku()
	{
		return $this->hasMany('App\Models\buku');
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
	
	protected $table = 'buku'; 
	
	public function penulis()
	{
		return $this->belongsTo('App\Models\penulis');
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pengguna extends Model
{
    use HasFactory;

public function login($uname, $password){
      $query = DB::select("SELECT * FROM pengguna WHERE username = '$uname' AND password = '$password'");

      if ($query == null) {
        return false;
      }
      return $query;
    }
}

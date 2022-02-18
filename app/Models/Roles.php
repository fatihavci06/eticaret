<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Role_user;
class Roles extends Model
{
    use HasFactory;
    public function users(){
      return  $this->belongstoMany(User::class, 'user_id', 'id');  //post tablosundaki user benim(user tablosu) idime eşit demek
    }
    public function roles(){
      return  $this->hasMany(Role_user::class, 'role_id', 'id');  //post tablosundaki user benim(user tablosu) idime eşit demek
    }
}


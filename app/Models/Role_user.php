<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;
class Role_user extends Model
{
    use HasFactory;
    public function roles_name(){
      return  $this->hasMany(Roles::class, 'id', 'role_id');  //post tablosundaki user benim(user tablosu) idime eşit demek
    }
}

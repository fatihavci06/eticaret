<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\OrderItem;
class Order extends Model
{
    use HasFactory;
    public function user(){
      return  $this->hasOne(User::class, 'id', 'user_id'); // user tablosundaki id benim(post tablosu) userime eşit demek
    }
    public function order_item(){
      return $this->hasMany(OrderItem::class,'order_id','id');
    }
}

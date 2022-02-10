<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
class OrderItem extends Model
{
    use HasFactory;
    public function user(){
      return  $this->hasOne(User::class, 'id', 'user_id'); // user tablosundaki id benim(post tablosu) userime eşit demek
    }
    
    public function product(){
      return  $this->hasOne(Product::class, 'id', 'product_id'); // user tablosundaki id benim(post tablosu) userime eşit demek
    }

}

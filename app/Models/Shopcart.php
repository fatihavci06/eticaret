<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Shopcart extends Model
{
    use HasFactory;
    public function product(){
      return  $this->hasOne(Product::class, 'id', 'product_id'); // user tablosundaki id benim(post tablosu) userime eşit demek
    }
}

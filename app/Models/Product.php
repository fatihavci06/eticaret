<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Product extends Model
{
    use HasFactory;
    public function images(){
      return  $this->hasMany(Image::class, 'product_id', 'id');  //post tablosundaki user benim(user tablosu) idime eşit demek
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

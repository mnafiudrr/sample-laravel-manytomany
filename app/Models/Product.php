<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class,ProductCategory::class,'product_id','category_id');
    }
}

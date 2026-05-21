<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock'
    ];

    public function Category(){
        return $this->belongTo(Category::class,"Categories_id");
    }

    public function Orders(){
        return $this->belongTo(Orders::class,"Orders_id");
    }
}

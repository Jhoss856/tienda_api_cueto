<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    /** @use HasFactory<\Database\Factories\OrdersFactory> */
    use HasFactory;
    public function client(){
        return $this->belongToc(Client::class,"client_id");
    }

    public function Products(){
        return $this->hasMany(Products::class,"orders_id");
}

}
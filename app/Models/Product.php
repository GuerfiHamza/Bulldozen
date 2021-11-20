<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug' ,
        'sku' ,
        'brand' ,
        'details',
        'price',
        'description',
        'featured'  ,
        'quantity'  ,

    ];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}

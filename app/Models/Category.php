<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model

{
    use HasFactory;
    protected $table = 'category';

public function products()
{
    return $this->belongsToMany('App\Models\Product');
}
public function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur2 extends Model
{
    protected $table = 'fournisseurs2';
    protected $fillable = ['name', 'logo'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdreProduct extends Model
{
    use HasFactory;
    protected $table = 'ordre_products';
    protected $fillable = ['ordre_id','product_id'];
}

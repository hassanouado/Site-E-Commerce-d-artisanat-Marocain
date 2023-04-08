<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['name_cat','slug', 'etat_cat'];

    public function product()
    {
        return $this->hasMany(Product::class, 'categorie_id','id');
    }
}

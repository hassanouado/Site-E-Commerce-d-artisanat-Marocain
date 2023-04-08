<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['libelle', 'categorie_id', 'Q_produit', 'image', 'description', 'prix'];

    public function category()
    {
        return $this->belongsTo(Category::class,'categorie_id','id');
    }
    public function ordres()
    {
        return $this->BelongsToMany(Ordre::class, 'ordre_products', 'product_id', 'ordre_id');
    }
}

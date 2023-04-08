<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordre extends Model
{
    use HasFactory;
    public $table = 'ordre';
    public function products()
    {
        return $this->BelongsToMany(Product::class, 'ordre_products', 'product_id', 'ordre_id');
    }
    
    public function livraison()
    {
        return $this->belongsTo(Livraison::class, 'livraison_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}

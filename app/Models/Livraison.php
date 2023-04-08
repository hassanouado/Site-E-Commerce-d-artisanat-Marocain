<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $table = 'livraison';
    protected $fillable = ['mode_livraison', 'date_livraison'];
    public function ordres()
    {
        return $this->hasMany(Ordre::class, 'livraison_id', 'id');
    }
}

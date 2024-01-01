<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['nom', 'description', 'categorie_id', 'thumbnail'];

    protected $searchableFields = ['*'];

    public function categories()
    {
        return $this->hasMany(Categorie::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
}

<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['nom', 'thumbnail', 'description', 'categorie_id'];

    protected $searchableFields = ['*'];

    public function caracteristiques()
    {
        return $this->hasMany(Caracteristique::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}

<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Caracteristique extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['nom', 'produit_id'];

    protected $searchableFields = ['*'];

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}

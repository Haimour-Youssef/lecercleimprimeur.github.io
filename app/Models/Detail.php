<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'nom',
        'caracteristique_id',
        'thumbnail',
        'prix',
        'detail_id',
    ];

    protected $searchableFields = ['*'];

    public function caracteristique()
    {
        return $this->belongsTo(Caracteristique::class);
    }

    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}

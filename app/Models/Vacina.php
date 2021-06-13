<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacina extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'prevencoes',
        'repetivel'
    ];

    public $timestamps = false;

    function doses()
    {
        return $this->hasMany(Dose::class);
    }

    function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

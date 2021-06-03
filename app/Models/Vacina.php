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
        'categoria'
    ];

    public $timestamps = false;

    function doses()
    {
        return $this->hasMany(Dose::class);
    }
}
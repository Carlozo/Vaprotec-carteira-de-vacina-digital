<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dose extends Model
{
    use HasFactory;

    protected $fillable = [
        'idade',
        'descricao'
    ];

    public $timestamps = false;

    function vacina()
    {
        return $this->belongsTo(Vacina::class);
    }
}

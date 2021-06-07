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

    protected $appends = ['idade_descricao'];

    public $timestamps = false;

    function vacina()
    {
        return $this->belongsTo(Vacina::class);
    }

    function getIdadeDescricaoAttribute()
    {
        $idade = $this->attributes['idade'];

        if ($idade == 0) {
            return 'Ao nascer';
        } else if ($idade == 0.01) {
            return $idade * 100 . ' mês';
        } else if ($idade == 1) {
            return $idade . ' ano';
        } else if ($idade > 1) {
            return $idade . ' anos';
        } else if ($idade > 0 && $idade < 1) {
            return $idade * 100 . ' meses';
        } else {
            return 'Indefinida';
        }
    }
}

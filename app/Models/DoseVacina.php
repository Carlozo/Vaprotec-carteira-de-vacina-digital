<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoseVacina extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'observacoes'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vacina()
    {
        return $this->belongsTo(Vacina::class);
    }
}

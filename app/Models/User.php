<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'birth_date'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function doses()
    {
        return $this->hasMany(UsuarioDose::class);
    }

    public function getDoses()
    {
        return $this->doses->map(function ($usuario_dose) {
            return $usuario_dose->dose;
        });
    }

    public function getIdadeEmAnos()
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }

    public function getIdadeEmMeses()
    {
        $birthday = new DateTime($this->attributes['birth_date']);
        $diff = $birthday->diff(new DateTime());
        return $diff->format('%m') + 12 * $diff->format('%y');
    }

    public function getIdadeDecimal()
    {
        $idade = $this->getIdadeEmAnos();

        if ($idade == 0) {
            $idade = $this->getIdadeEmMeses() / 100;
        }

        return $idade;
    }

    function getDescricaoIdade()
    {
        $idade = $this->getIdadeEmAnos();

        if ($idade > 0) {
            if ($idade == 1) {
                return $idade . ' ano';
            } else {
                return $idade . ' anos';
            }
        }

        $idade = $this->getIdadeEmMeses();

        if ($idade > 0) {
            return $idade . ' meses';
        } else {
            return 'Menos de um mês';
        }
    }
}

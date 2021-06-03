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

    public function age()
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }

    public function getAgeInMonths()
    {
        $birthday = new DateTime($this->attributes['birth_date']);
        $diff = $birthday->diff(new DateTime());
        return $diff->format('%m') + 12 * $diff->format('%y');
    }

    public function getIdadeDecimal()
    {
        $idade = $this->age();

        if ($idade == 0) {
            $idade = $this->getAgeInMonths() / 100;
        }

        return $idade;
    }

    function getDescricaoIdade()
    {
        $idade = $this->age();

        if ($idade > 0) {
            if ($idade == 1) {
                return $idade . ' ano';
            } else {
                return $idade . ' anos';
            }
        }

        $idade = $this->getAgeInMonths();

        if ($idade > 0) {
            return $idade . ' meses';
        } else {
            return 'Menos de um mês';
        }
    }

    public function getDoses()
    {
        return $this->doses->map(function ($usuario_dose) {
            return $usuario_dose->dose;
        });
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'edad',
        'sexo',
        'tipo'
    ];

    /**
     * Scope a query to only include active users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTipo($query, $tipo)
    {
        if ($tipo != "") {
            $query = Paciente::where('tipo', $tipo);
        }
        return $query;
    }

    /**
     * Scope a query to only include active users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSexo($query, $sexo)
    {
        if ($sexo != "") {
            $query = Paciente::where('sexo', $sexo);
        }
        return $query;
    }

    /**
     * Scope a query to only include active users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeEdad($query, $edad)
    {
        if ($edad != '') {
            switch ($edad) {
                case 1:
                    $query = Paciente::where('edad', '>', 0)->where('edad', '<', 18);
                    break;
                case 2:
                    $query = Paciente::where('edad', '>', 18)->where('edad', '<', 25);
                    break;
                case 3:
                    $query = Paciente::where('edad', '>', 25)->where('edad', '<', 60);
                    break;
                case 4:
                    $query = Paciente::where('edad', '>', 60);
                    break;

                default:
                    $query = Paciente::where('edad', '>', 0)->where('edad', '<', 100);
                    break;
            }
        }

        return $query;
    }
}

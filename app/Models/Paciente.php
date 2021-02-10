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
            $query = $query->where('tipo', $tipo);
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
            $query = $query->where('sexo', $sexo);
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
                    $query = $query->whereBetween('edad', [0, 18]);
                    break;
                case 2:
                    $query = $query->whereBetween('edad', [18, 25]);
                    break;
                case 3:
                    $query = $query->whereBetween('edad', [25, 60]);
                    break;
                case 4:
                    $query = $query->where('edad', '>', 60);
                    break;

                default:
                    break;
            }
        }

        return $query;
    }
}

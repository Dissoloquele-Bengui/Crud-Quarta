<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operador extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'vc_nome',
    'vc_nif',
    'yr_ano_fundacao',
    'vc_zona_geografica_actuacao',
    'vc_tecnologia_usada',
    'vc_site_oficial',
    'it_estado',
    ];
    protected $table = 'operadores';

}

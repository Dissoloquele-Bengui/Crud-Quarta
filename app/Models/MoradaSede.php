<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoradaSede extends Model
{
    use HasFactory;
    protected $fillable = [
        'vc_rua',
        'vc_provincia',
        'vc_municipio',
        'vc_bairro',
        'vc_complemento',
        'it_estado',
        ];
}
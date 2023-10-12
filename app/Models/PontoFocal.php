<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PontoFocal extends Model
{
    use HasFactory;
    protected $fillable = [
        'vc_pNome',
        'vc_nomeMeio',
        'vc_uNome',
        'it_estado',
        ];
}
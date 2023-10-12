<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequenciaNumeracao extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'vc_frequencia',
    'vc_numeracao',
    'it_estado',
    ];
    protected $table = 'frequencia_numeracaos';

}

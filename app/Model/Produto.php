<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 */
class Produto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'peso',
        'unidade_id'
    ];
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $nome
 */
class Cliente extends Model
{
    protected $fillable = [
        'nome'
    ];
}

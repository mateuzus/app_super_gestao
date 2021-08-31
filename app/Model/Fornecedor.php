<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;

    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'email', 'site', 'uf'];

    public function produtos()
    {
        return $this->hasMany(Item::class, 'fornecedor_id', 'id');
    }
}

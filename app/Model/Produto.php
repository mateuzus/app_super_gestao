<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\ProdutoDetalhe;

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

    public function produtoDetalhe()
    {
        return $this->hasOne(ProdutoDetalhe::class);
    }
}

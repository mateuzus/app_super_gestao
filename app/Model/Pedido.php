<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $cliente_id
 * @property mixed $id
 */
class Pedido extends Model
{
    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'pedidos_produtos');
    }
}

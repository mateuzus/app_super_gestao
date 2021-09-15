<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $produto_id
 */
class PedidoProduto extends Model
{
   protected $table = 'pedidos_produtos';
    /**
     * @var mixed
     */
    private $pedido_id;
}

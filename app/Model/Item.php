<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $id
 */
class Item extends Model
{
    protected $table = 'produtos';
   protected $fillable = [
       'nome',
       'descricao',
       'peso',
       'unidade_id',
       'fornecedor_id'
   ];

    public function itemDetalhe()
    {
        return $this->hasOne(ItemDetalhe::class, 'produto_id', 'id');
   }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
   }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedidos_produtos', 'produto_id', 'pedido_id');
   }
}

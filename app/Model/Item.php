<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';
   protected $fillable = [
       'nome',
       'descricao',
       'peso',
       'unidade_id'
   ];

    public function itemDetalhe()
    {
        return $this->hasOne(ItemDetalhe::class, 'produto_id', 'id');
   }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
   }
}

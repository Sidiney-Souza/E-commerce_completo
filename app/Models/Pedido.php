<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'status'];

    public function itens_pedidos(){
        return $this->hasMany('App\Models\ItensPedido')
        ->select(DB::raw('produto_id, SUM(desconto) as descontos, SUM(valor) as valores,
             count(1) as qtd'))
        ->groupBy('produto_id')
        ->orderBy('produto_id', 'desc');
    }

    //
    public function itens_pedidos_produtos(){
        return $this->hasMany('App\Models\ItensPedido');
    }

    //
    public function buscarPedido($values){
        $pedido = self::where($values)->first(['id']);

        if (isset($pedido->id)) {
            return $pedido->id;
        } else {
            return null;
        }

    }
}

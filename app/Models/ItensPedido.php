<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Model
{
    use HasFactory;
    protected $fillable = ['pedido_id', 'produto_id', 'status', 'preco'];

    public function produto(){
        return $this->belongsTo('App\Models\Produto', 'produto_id', 'id');
    }
}

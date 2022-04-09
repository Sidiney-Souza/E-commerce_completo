<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    
    
    public function buscaPeloCliente(string $nome = '') {
        return $this->where('nome', 'like', "%$nome%")->get();
    }
    
  
}

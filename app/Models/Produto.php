<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    
        
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'qtd',
        'preco',
        'descricao',
        'foto',
        
    ];
    
    public function buscaPorNome(string $nome = '') {
        return $this->where('nome', 'like', "%$nome%")->get();
    }
    
  
}

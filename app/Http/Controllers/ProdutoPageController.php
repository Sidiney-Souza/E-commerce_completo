<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\ProdutoPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\returnSelf;

class ProdutoPageController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $produto = Produto::all();
        return view('site.produtos', ['produto' => $produto]);
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto) {
        
        $produto->foto = (!empty($produto->foto ))?asset('storage/'. $produto->foto):asset('storage/produto/padrao.png');
        return view('site.show', ["produto" => $produto]);

    }

 

    public function search(Request $request) {
        if ($request->nome) {
            $produto = (new Produto())->buscaPorNome($request->nome);
        } else {
            $produto = Produto::all();
        }

        return view('site.produtos', ['produto' => $produto]);
    }

}

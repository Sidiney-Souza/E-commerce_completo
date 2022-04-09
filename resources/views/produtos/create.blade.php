<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>
            House's G - Create
        </title>
        <link style="filter:invert(50%);" rel="icon" type="imagem/png" href="{{ asset('storage/logo/logo.png') }}" />
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Novo Produto</h1>
        
        @if($msg = session('msg'))
            <p style="color: {{$msg[1]}};">{{$msg[0]}}</p>
        @endif
        <div class="container">
            <div class="campo">
                <form method="post" action="{{route('produto.store')}}" enctype="multipart/form-data">
                    @csrf
                    Nome:
                    <input type="text" name="nome"><br><br>
                    Quantidade:
                    <input type="number" name="qtd"><br><br>
                    Preço:
                    <input type="number" step="0.01" name="preco"><br><br>
                Descrição do Produto:
                <input type="textarea" name="descricao"><br><br>
                Foto:
                <input type="file" name="foto"><br><br>
                <input type="submit" name="Salvar"><br><br>
            </form><br><br>
            <a class="btn btn-secondary" href='{{route('produto.index')}}'>Voltar</a>
            </div>
        </div>
    </body>

    <style>
        .container {
            justify-content: center;
            display: flex;
            flex-direction: row;
            display: flex;
        }
    
    
        .campo{
            padding: 19px;
            border: solid 4px; 
            border-radius: 12px;
        }
    
    </style>


</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>

    <meta charset="UTF-8">
    <title>
        House's G - Edit
    </title>
    <link style="filter:invert(50%);" rel="icon" type="imagem/png" href="{{ asset('storage/logo/logo.png') }}" />
</head>

<body>
    <h1>Alteralção do produto{{ $produto->nome }}</h1>
    <div class="container">
        <div class="campo">
            <form action="{{ route('produto.update', ['produto' => $produto]) }}" method="POST" enctype="multipart/form-data">
                @csrf
            @method('PATCH')
            Nome:
            <input type="text" name="nome" value="{{ $produto->nome }}"><br><br>
            
                Quantidade:
                <input type="number" name="qtd" value="{{ $produto->qtd }}"><br><br>
                Preço:
                <input type="number" step='0.01' name="preco" value="{{ $produto->preco }}"><br><br>
                Descrição do produto:
                <input type="textarea" name="descricao" value="{{ $produto->descricao }}"><br><br>
                Foto:
                <input type="file" name="foto"><br><br>
                <input type="submit" name="Salvar"><br><br>
            </form>
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

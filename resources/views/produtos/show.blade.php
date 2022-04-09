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
            House's G - {{$produto->nome}}
        </title>
        <link style="filter:invert(50%);" rel="icon" type="imagem/png" href="{{ asset('storage/logo/logo.png') }}" />
    </head>
    <body>
        <h1>Detalhes do Produto</h1>
        Id: {{$produto->id}}<br>
        Nome:{{$produto->nome}}<br>
        Quantidade: {{$produto->qtd}}<br>
        Preço: {{$produto->preco}}<br>
        Descrição do produto: {{$produto->descricao}}<br>
        Foto:<br><img width="300px" src="{{$produto->foto}}"><br>
        Data do cadastro: {{$produto->created_at}}<br>
        hora de atualização: {{$produto->update_at}}<br>
        <br><br>
        <a href='{{route('produto.index')}}'>Voltar</a>
    </body>
</html>

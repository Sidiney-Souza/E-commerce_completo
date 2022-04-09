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
            House's G - Details
       </title>
    <link style="filter:invert(50%);" rel="icon" type="imagem/png" href="{{ asset('storage/logo/logo.png') }}" />
    </head>
    <body>
        <div class="container">
            <div class="campo">
                <h1>Detalhes do usuário</h1>
                Id: {{$user->id}}<br>
                Nome:{{$user->name}}<br>
                Idade: {{$user->idade}}<br>
                Contato: {{$user->contato}}<br>
                E-mail: {{$user->email}}<br>
                Data do cadastro: {{$user->created_at}}<br>
                hora de atualização: {{$user->update_at}}<br>
                <br><br>
                <a href='{{route('user.index')}}'>Voltar</a>
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
    
    
        .campo {
            padding: 19px;
            border: solid 4px;
            border-radius: 12px;
            box-shadow: 1px 10px 10px;
        }
    
    </style>
</html>

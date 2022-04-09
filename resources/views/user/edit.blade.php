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
        House's G - Edit User
    </title>
    <link style="filter:invert(50%);" rel="icon" type="imagem/png" href="{{ asset('storage/logo/logo.png') }}" />
</head>

<body>
    <h1>Alteralção do usuario(a) {{ $user->name }}</h1>
    <div class="container">
        <div class="campo">
            <form action="{{ route('user.update', ['user' => $user]) }}" method="POST">
                @csrf
                @method('PATCH')
                Nome:
            <input type="text" name="name" value="{{ $user->name }}"><br><br>
            Idade:
            <input type="number" name="idade" value="{{ $user->idade }}"><br><br>
            Contato:
            <input type="text" name="contato" value="{{ $user->contato }}"><br><br>
            E-mail:
            <input type="text" name="email" value="{{ $user->email }}"><br><br>
            <!--            Senha:
                <input type="password" name="senha" value="{{ $user->password }}"><br>-->
                <input type="submit" name="Guardar"><br>
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


    .campo {
        padding: 19px;
        border: solid 4px;
        border-radius: 12px;
        box-shadow: 1px 10px 10px;
    }

</style>

</html>

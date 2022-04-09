@extends('produtos/layort')

@section('titulo', 'lista dos produtos')

@section('conteudo')

<h1>Todos os produtos</h1>
<br><a href="{{ route('produto.create') }}">Novo produto</a><br><br>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <body>

        @if (session('msg'))
            {{ session('msg') }}<br><br>
        @endif


        @foreach ($produto as $produto)
        <div class="container">
                <div class="produto">
                    <img class="img" width="150px" src="{{ asset('storage/' . $produto->foto) }}"><br>
                    <b>{{ $produto->nome }}</b>
                    <b>Preço:</b> {{ $produto->preco }}<br>
                    <a href='{{ route('produto.show', ['produto' => $produto]) }}'>Detalhes</a>
                    <a href='{{ route('produto.edit', ['produto' => $produto]) }}'>Editar</a>

                    <form method="post" action="{{ route('produto.destroy', ['produto' => $produto]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Deletar produto">
                    </form>
                
                </div>
        @endforeach
        </div>
    @endsection
</body>
<style>
    .img {
        align-items: center;
    }

    .produto {
        margin-right: 50px;
        padding: 50px;
        position: static;
        border: 3px solid;
        height: auto;
        width: auto;
        padding-left: 10px;
        border-radius: 15px;
        box-shadow: 1px 10px 10px;
    }

    .container {
        justify-content: center;
        display: flex;
        flex-direction: row;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        align-content: center;
    }

</style>



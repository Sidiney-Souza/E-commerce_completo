<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/estilo.css">
    <title>
        House's G
   </title>
<link style="filter:invert(50%);" rel="icon" type="imagem/png" href="{{ asset('storage/logo/logo.png') }}" />
</head>

<body>


    <div class="menu">
        <ul>
            <li class="logo">House's G</li>
            <li class="right" ><a  href="{{ route('produto.index') }}">Produtos</a></li>
            <li class="right" ><a  href="{{ route('user.index') }}">Usuários</a></li>
            <li class="" >
                <form action="{{ route('produto.search') }}" method="POST" class="d-flex">
                    @csrf
                    <input type="search" name="nome" placeholder="Busca por nome" aria-label="Search">
                    <button type="submit">Pesquisar</button>
                </form>
            </li>
        </ul>
    </div>


    <div>
        @yield('conteudo')
    </div>

</body>

</html>

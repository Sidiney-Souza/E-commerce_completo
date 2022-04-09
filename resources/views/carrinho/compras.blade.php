<html>
{{-- aqui é a tabela  itens_pedidos --}}

<head>
    <title>
        House's G - Your Shopping
    </title>
    <link style="filter:invert(50%);" rel="icon" type="imagem/png" href="{{ asset('storage/logo/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('css/pedidos_page.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar transparent  navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a>
                <div class="img-logo">
                    <img style="filter:invert(85%);" src="{{ asset('storage/logo/logo.png') }}" alt="" width="40"
                        height="40">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ '/housesg/public' }}"><b>House's
                                G</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '/housesg/public/produtos' }}"><b>Produtos</b></a>
                    </li>
                </ul>
                <a href="{{ route('carrinho.index') }}" class="material-icons" id="logcart">shopping_cart</a>
                <div class="search">
                    <form action="{{ route('produtos.search') }}" method="POST" class="d-flex">
                        @csrf
                        <input class="form-control me-2" type="search" name="nome" placeholder="Busca por produtos"
                            aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Search</button>&nbsp;
                    </form>
                </div>
                <div>
                    <div class="d-flex">
                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="btn btn-dark">My Profile</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-light">Long in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
    </nav>
    <div class="container conteudo text-center">
        <h1 class="titulo">Shopping</h1>
        @if (session('mensagem'))
            <div class="alert alert-success"></div>
            {{ session('mensagem') }}
        @endif
        <hr>
        <div class="container">
            <div class="container text-center">
                <h4 class="my_shopping"> My Shopping </h4><br>
            </div>



            <table class="table">
                <!-- cabeçalho da lista de produtos -->
                <thead>
                    <tr>
                        <th></th>
                        <th>Products</th>
                        <th>value</th>
                        <th>data</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- lista de produtos -->
                <tbody>
                    @forelse($compras as $compra)
                        {{-- {{ dd($compra) }} --}}
                        @foreach ($compra->itens_pedidos_produtos as $item_pedido)
                            @if ($item_pedido->status == 'PA')
                                <tr lass="linha_produto">
                                    <td class="coluna_imagem_produto"><img class="imagem_produto"src="{{ asset('storage/' . $item_pedido->produto->foto) }}" alt=""></td>
                                    <td>{{ $item_pedido->produto->nome }}</td>
                                    <td>R$: {{ number_format($item_pedido->produto->preco, 2, ',', '.') }}</td>
                                    <td>{{ $item_pedido->created_at }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('carrinho.cancelar') }}">
                                            {{ csrf_field() }}
                                            <input class="botao_cancelar_compra" type="submit" name="id_pedido" value="{{ $item_pedido->pedido_id }}">&nbsp; Remove
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        {{-- se não tiver nenhum pedido mostrará ao usuário que nenhum pedido foi solitado --}}
                    @empty
                        <p>Don't have order</p>
                    @endforelse
                </tbody>
            </table>
        </div>


        <div class="container">
            <div class="container text-center">
                <h4> Cancel order</h4>
            </div>

            @forelse ($cancelados as $pedido)

                <table border="none">
                    <thead>
                        <tr>
                            <th>Produto &nbsp;</th>
                            <th>Valor </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($pedido->itens_pedidos_produtos as $itens_pedido)
                            <tr>
                                <td>{{ $itens_pedido->produto->nome }}</td>
                                <td>R$: {{ number_format($itens_pedido->produto->preco, 2, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="container text-center"><br> </div>
            @empty
                <div class="container text-center">
                    <h3>Don't cancel order</h3>
                </div>
        </div>

        @endforelse
    </div>
    </div>

    <style>


        .footer {
            padding-top: 5px;
            background-color: #191919;
            bottom:0;
            height: auto;
            position: fixed;
            width: 100% ;
            font-size: 12;
            text-align: center;
            
            
        }

        .li {
            list-style-type: none;
            background: 
        }

        .linhagem {
            /* flex-direction: row; */
            /* background: red; */
            display: flex;
            align-content: center;
            justify-content: center;
            padding: 0px;
            margin: 0px;
        }

        .li{
            margin: 10px;
            text-decoration: none;
            font-size: 16px
        }

        a{
            text-decoration: none;
            color: rgb(182, 182, 182);
        }

        


    </style>
        <footer class="footer footer navbar-fixed-bottom">
            <nav class="itens_button">
                <ul  class="linhagem">
                    <li class="li"><a href="https://www.facebook.com/sidiney.souza.9843">Facebook</a></li>
                    <li class="li"><a href="https://github.com/Sidiney-Souza">GitHub</a></li>
                    <li class="li"><a href="https://www.instagram.com/sidiney_souza.1/">Instagram</a></li>
                </ul>
                <ul>
                    <li style="list-style: none; color:white;" class="lii">Técnico em infomática - Projeto - housesg</li>
                    <li  style="list-style: none; color:white;" class="lii">Terms of Use - Privacy Policy</li>
                    <small style="color:white;">Copyright © 2022 </small>
                </ul>
            </nav>
        </footer>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    @stack('scripts')
    <script type="text/javascript">
        < /body> /
        html >
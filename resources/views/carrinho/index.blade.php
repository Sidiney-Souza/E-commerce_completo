<html>

<head>
    <title>
        House's G - Cart
    </title>
    <link style="filter:invert(50%);" rel="icon" type="imagem/png" href="{{ asset('storage/logo/logo.png') }}" />
    <style>
        .ok {
            font-size: 7em;
        }

        .search {
            padding-top: 12px;
            margin: none;

        }

        .branco_fundo {
            background: white;
            padding-top: 35px;
            padding-bottom: 35px;
            padding-left: 35px;
            padding-right: 35px;
            width: 630px;
            height: 470px;
            border-radius: 15px;
            box-shadow: 1px 1px 16px;
            height: auto;
        }

        body {
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center;
            background-image: url("https://cdn.pixabay.com/photo/2021/03/27/08/49/mic-6127818_960_720.jpg");
        }

        main {
            color: white;
        }

        #logcart {
            color: #141414;
            margin-right: 12px;
            background: white;
            border-radius: 3px;
        }

        .img-logo {
            margin-right: 10px;
            width: 50px;
            height: 50px;
            background: url('https://cdn-102.anonfiles.com/13o2H7P7xe/19a7f989-1647807588/logo-siriguela.png') center;
            background-size: 50px 50px;
            filter: invert();
        }

        .imagem_produto{
            width: 50px;
            padding: 0px;
            margin: 0px;
        }

    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>



<body>

    <nav class="navbar transparent  navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a>
                <div class="img-logo">
                    <img src= "{{ asset('storage/logo/logo.png') }}" alt="" width="40" height="40">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ '/housesg/public' }}"><b>House's G</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ 'produtos' }}"><b>Produtos</b></a>
                    </li>
                </ul>
                <a class="btn btn-light" href="{{route('carrinho.compras')}}" >My orders</a>&nbsp;&nbsp;
                <a href="{{route('carrinho.index')}}" class="material-icons" id="logcart">shopping_cart</a>
                <div class="search">
                    <form action="{{ route('produtos.search') }}" method="POST" class="d-flex">
                        @csrf
                        <input class="form-control me-2" type="search" name="nome" placeholder="Busca por produtos" aria-label="Search">
                        <button class="btn btn-secondary" type="submit">Search</button>&nbsp;
                    </form>
                </div>
                <div>
                    <div class="d-flex">
                        @if (Route::has('login'))
                        <div>
                            @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark">My Profile</a>
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
    @forelse($pedidos as $pedido)
    <div class="container">
        <div class="row">
            <div class="col align-self-start">
                <div class="col-6 col-sm-6">
                    <div class="branco_fundo">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Produto</th>
                                    <th>Valor</th>
                                    <th>Desconto</th>
                                    <th>Total</th>
                                    <th>Funções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $total_pedido = 0;
                                @endphp

                                @foreach($pedido->itens_pedidos as $itens_pedido)
                                <tr>
                                    <td><img class="imagem_produto" src="{{ asset('storage/' . $itens_pedido->produto->foto) }}" alt=""></td>
                                    <td>{{$itens_pedido->produto->nome}}</td>
                                    <td>R$: {{number_format($itens_pedido->produto->preco,2,',','.')}}</td>
                                    <td>R$: {{number_format($itens_pedido->descontos,2,',','.')}}</td>
                                    @php
                                    $total_produto = $itens_pedido->produto->preco - $itens_pedido->descontos;
                                    $total_pedido += $total_produto;
                                    @endphp
                                    <td>R$: {{number_format($total_produto,2,',','.')}}</td>
                                    <td>
                                        <form name="form-remover-produto" action="{{route('carrinho.remover')}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="pedido_id" value="{{$pedido->id}}">
                                            <input href="#" style="background-color: #9c0a00; color:#ffffff; text-decoration:none;" type="submit" class="btn btn-link" value="Retirar">
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>

                        <div class="container text-center"><br>
                            <form action="{{route('carrinho.desconto')}}" method="POST">
                                @csrf
                                <input type="hidden" name="pedido_id" value="{{$pedido->id}}">
                                <label for="cupom"><b>Digite o cupom:</b></label>
                                <input type="text" id="cupom" name="cupom">
                                <button type="submit" class="btn btn-secondary">Aplicar Cupom</button>
                            </form>
                            <h1>Totalidade: R$: {{number_format($total_pedido,2,',','.')}}</h1>
                            <br>
                            <form action="{{route('carrinho.concluir')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <div class="container">
                                            <a href="{{ 'produtos' }}" class="btn btn-secondary">Continue buying</a>
                                        </div>
                                        <input type="hidden" name="pedido_id" value="{{$pedido->id}}">
                                        <button type="submit" class="btn btn-dark">Buy Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div style=" color: white; display: flex ; flex-direction: column ; justify-content: center ;  align-items: center ; height: 500px ;">
        <h1>Empty!</h1>
    </div>
    @endforelse


    @push('scripts')
    <script type="text/javascript" src="{{ asset('js/carrinho.js') }}"></script>
    @endpush


    

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    @stack('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".button-collapse").sideNav();
            $('select').material_select();
        });
    </script>
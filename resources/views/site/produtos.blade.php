<html>

<head>
    <title>
        House's G - Products
   </title>
<link style="filter:invert(50%);" rel="icon" type="imagem/png" href="{{ asset('storage/logo/logo.png') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a>
                <img style="filter:invert(85%);" src= "{{ asset('storage/logo/logo.png') }}" alt="" width="40" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ '/housesg/public' }}">House's G</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ 'produtos' }}">Produtos</a>
                    </li>
                </ul>
                <div>
                    <div class="d-flex">
                        <a href="{{route('carrinho.index')}}" class="material-icons" id="logcart">shopping_cart</a>
                        <div class="search">
                            <a href="{{route('cart.index')}}" ></a>
                            <form action="{{ route('produtos.search') }}" method="POST" class="d-flex">
                                @csrf
                                <input class="form-control me-2" type="search" name="nome" placeholder="Busca por produtos" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>&nbsp;
                            </form>
                        </div>
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

 



    <div class="container">
        <center>
            <h1><br>Melhor lugar não há.</h1><br>
        </center>
        <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 50rem;">
            @foreach ($produto as $produto)
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top" width="10px" src="{{ asset('storage/' . $produto->foto) }}"><br>
                        <div class="card-body">
                            <h5 class="card-title">{{ $produto->nome }} R${{ $produto->preco }}</h5>
                            <a class="btn btn-danger" href='{{ route('produtos.show', ['produto' => $produto]) }}'>Buy
                                </a>
                                <form method="POST" action="{{route('carrinho.adicionar')}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $produto->id }}">
                                    <button>add to cart</button>
                                </form>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{ $produto->created_at }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br><br><br>
    <style>
        .footer {
            padding-top: 5px;
            background-color: #191919;
            bottom: 0;
            height: auto;
            position: fixed;
            width: 100%;
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

        .li {
            margin: 10px;
            text-decoration: none;
            font-size: 16px
        }

        a {
            text-decoration: none;
            color: rgb(182, 182, 182);
        }

        
        #logcart {
            color: black;
            margin-right: 12px ;
            margin-top: 10px ;
        }
    </style>
    <center>
        <footer class="footer">
            <nav class="itens_button">
                <ul class="linhagem">
                    <li class="li"><a href="https://www.facebook.com/sidiney.souza.9843">Facebook</a></li>
                    <li class="li"><a href="https://github.com/Sidiney-Souza">GitHub</a></li>
                    <li class="li"><a href="https://www.instagram.com/sidiney_souza.1/">Instagram</a></li>
                </ul>
                <ul>
                    <li style="list-style: none; color:white;" class="lii">Técnico em infomática - Projeto -
                        housesg</li>
                    <li style="list-style: none; color:white;" class="lii">Terms of Use - Privacy Policy</li>
                    <small style="color:white;">Copyright © 2022 </small>
                </ul>
            </nav>
        </footer>

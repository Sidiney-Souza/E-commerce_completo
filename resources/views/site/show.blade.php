<html>

<head>
    <title>
        House's G - {{ $produto->nome }}
   </title>
    <link style="filter:invert(50%);" rel="icon" type="imagem/png" href="{{ asset('storage/logo/logo.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<style>
            
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

* {
    font: normal 1em Roboto;
}
</style>

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
                        <div class="search">
                            <form action="{{ route('produtos.search') }}" method="POST" class="d-flex">
                                @csrf
                                <input class="form-control me-2" type="search" name="nome"
                                    placeholder="Busca por produtos" aria-label="Search">
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
    <br><br>





    <div class="container">

        <div class="card w-75">
            <div class="card-body">
                <h5 class="card-title">{{ $produto->nome }}</h5>
                <p class="card-text">
                    <b>Quantidade:</b> {{ $produto->qtd }}<br>
                    <b>R$</b> {{ $produto->preco }}<br>
                    <b>Descrição:</b><br> {{ $produto->descricao }}<br>
                    <br><img width="300px" src="{{ $produto->foto }}"><br>
                </p>
                <a href="#" class="btn btn-primary">Buy now</a>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
    <a class="btn btn-primary" href='{{ route('produtos.index') }}'>Back</a>
    <br><br>


    <br><br><br>
    <style>
        .footer {
            background-color: #191919;

        }

        .li {
            list-style-type: none;
        }


        }

    </style>
    <center>
        <footer class="footer">
            <br><br>
            <nav>
                <ul>
                    <li class="li"><a href="#">About the site</a></li>
                    <li class="li"><a href="#">Facebook</a></li>
                    <li class="li"><a href="#">Number for contact</a></li>
                </ul>
            </nav>
            <div style="color:white;">
                <small>Copyright © 2021 </small>
            </div>
            <br><br><br>
        </footer>
    </center>
</body>

</div>
</div>
</div>

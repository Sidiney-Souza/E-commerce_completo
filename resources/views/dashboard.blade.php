<html>
<head>
    <title>
        House's G
   </title>
<link style="filter:invert(50%);" rel="icon" type="imagem/png" href="{{ asset('storage/logo/logo.png') }}" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        * {
            font: normal 1em Roboto;
        }

        .ok {
            font-size: 7em;
        }

        .search {
            padding-top: 12px;
            margin: none;

        }

        .log{
          color: black;
          text-align: center;
          font-size: 30px;
        }

        .a{
            text-decoration: none;
        }

        body {
            background-repeat: no-repeat ;
            background-size: 100% ;
            background-position: end ;
            background-image: url("https://cdn.pixabay.com/photo/2017/08/02/05/49/recording-2570056_960_720.jpg");
        }

        main{
            color:white;
        }

        #logcart {
            color: white;
            margin-right: 12px ;
        }

    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

    <nav class="navbar transparent  navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a>
                <img src= "{{ asset('storage/logo/logo.png') }}" alt="" width="40" height="40">
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
                <a href="{{route('carrinho.index')}}" class="material-icons" id="logcart">shopping_cart</a>
                <div class="search">
                    <form action="{{ route('produtos.search') }}" method="POST" class="d-flex">
                        @csrf
                        <input class="form-control me-2" type="search" name="nome" placeholder="Busca por produtos"
                            aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>&nbsp;
                    </form>
                </div>
                <div>
                    <div class="d-flex">
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
                    </div>
                </div>
      </nav>
</head>

 
<body>
<div class="log"><br><br><br><b>
  <center>
 <p>You're logged in!</p><br>
  <p class="a"><a href="{{ 'produtos' }}">See products available</a></p>
</div>  
</center>
</body>
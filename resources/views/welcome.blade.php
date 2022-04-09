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

        .welcome {
            font-size: 6em;
            color: white;
            margin-bottom: 10px;
        }

        .search {
            padding-top: 12px;
            margin: none;

        }

        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: fixed;
            width: 100%;
            background-size: 100%;
            background-position: start;
            background-image: url("https://cdn.pixabay.com/photo/2019/09/18/19/53/piano-4487573_960_720.jpg");
        }

        main {
            color: white;
        }

        .top {
            top: 0;
            position: fixed;
            width: 100%;
        }

        #logcart {
            color: white;
            margin-right: 12px;
        }

        .img-logo {
            margin-right: 10px;
            width: 40px;
            height: 40px;
            background: url('https://cdn-102.anonfiles.com/13o2H7P7xe/19a7f989-1647807588/logo-siriguela.png') center;
            background-size: 50px 50px;
        }

    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>



<body>

    <nav class="navbar top transparent  navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a>
                <div class="img-logo">
                    <img src="{{ asset('storage/logo/logo.png') }}" alt="" width="40" height="40">
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
                        <a class="nav-link active" aria-current="page" href="{{ '/housesg/public' }}">House's G</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ 'produtos' }}">Produtos</a>
                    </li>
                </ul>
                <a href="{{ route('carrinho.index') }}" class="material-icons" id="logcart">shopping_cart</a>
                <div class="search">
                    <form action="{{ route('produtos.search') }}" method="POST" class="d-flex">
                        @csrf
                        <input class="form-control me-2" type="search" name="nome" placeholder="Busca por produtos"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>&nbsp;
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

    <div class="welcome">
        Welcome!
    </div>

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

        .welcome {
            max-width: 480px;
            text-align: center;
            margin: 60px auto;
            color: #fff;
        }

        .welcome::after {
            content: '|';
            opacity: 1;
            margin-left: 5px;
            display: inline-block;
            animation: blink 1s infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

    </style>

    <script>
        function typeWriter(elemento) {
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML = '';
            textoArray.forEach((letra, i) => {
                setTimeout(() => elemento.innerHTML += letra, 75 * i);
            });
        }

        const titulo = document.querySelector('.welcome');
        typeWriter(titulo);
    </script>


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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>

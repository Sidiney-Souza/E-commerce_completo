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
                <form action="{{route('user.search')}}" method="POST" class="d-flex">
                    @csrf
                    <input class="form-control me-2" type="search" name="name" placeholder="Digite algo..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </li>
        </ul>
    </div>



    <div class="container">
        @yield('conteudo')
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    

</body>

</html>

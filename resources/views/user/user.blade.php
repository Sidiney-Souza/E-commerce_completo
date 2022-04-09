@extends('user/layort')

@section('titulo', 'lista de usuarios')

@section('conteudo')
    <h1>Todos os usuários</h1>
    <br><a href="{{ route('user.create') }}">Novo usuário</a><br><br>

    @if (session('msg'))
        {{ session('msg') }}<br><br>
    @endif

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">OPÇÕES</th>
            </tr>
        </thead>
        @foreach ($user as $user)
            <div class="container">
                <tbody>
                    <tr>
                        <td>
                            Id: {{ $user->id }}
                        </td>
                        <td>
                            Nome: {{ $user->name }}
                        </td>
                        <td>
                            <a href='{{ route('user.show', ['user' => $user]) }}'>Detalhes</a>
                            <a href='{{ route('user.edit', ['user' => $user]) }}'>Editar</a>
                            <form method="post" action="{{ route('user.destroy', ['user' => $user]) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Apagar">
                            </form>
                        </td>
                    </tr>
                </tbody>
            </div>
        @endforeach
    @endsection

    <style>
        .container {
            /* background: green; */
        }


        .campo {
            padding: 19px;
            border: solid 4px;
            border-radius: 12px;
        }

    </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

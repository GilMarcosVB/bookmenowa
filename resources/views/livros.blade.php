<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livros</title>
</head>

<body>
    @include('includes.menu')

    <h1>Livros </h1>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, tempora. Temporibus eos debitis quas quod magnam. 
        Eius aliquid, sed reiciendis quam autem doloribus possimus eaque suscipit minus, et, voluptates dolores.</p>

    <ul>
        @foreach ($listalivros as $livros)
            <li> {{ $livros }}</li>
        @endforeach

    </ul>

</body>

</html>

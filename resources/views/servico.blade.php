<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookMenow - Serviços </title>
</head>

<body>

    @include("includes.menu")
    <h1>Serviço</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Ducimus laborum ipsa non laboriosam est nam libero error quod perferendis nesciunt a accusamus ipsam recusandae commodi nulla consequatur, 
        deserunt inventore exercitationem?</p>

<ul>
    @foreach ($listaDeServicos as $servico)

    <li> {{ $servico }} </li>
  
    @endforeach
</ul>

</body>



</html>

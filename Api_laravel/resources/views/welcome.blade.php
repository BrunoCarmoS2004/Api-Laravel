<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        </style>
    </head>
    <body>
        <h1>Alguma coisa</h1>
        @if(10>5)
            <p>A condição é true</p>
        @endif
        <p>{{$nome}}</p>
        @if($nome== "Bruno")
            <p>Seu nome é Bruno e tem {{$idade}} anos e trabalha como {{$profissao}}</p>
        @elseif($nome == "Rafael")
            <p>Seu nome é {{$nome}}</p>
        @else
            <p>Seu nome não é Bruno</p>
        @endif
    </body>
</html>

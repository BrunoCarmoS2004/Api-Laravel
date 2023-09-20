@extends('layouts.main')

@section('title', 'C-137 Events')

@section('content')
        <h1>Alguma coisa</h1>
        <img src="/img/banner.jpg" alt="">
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

        @for($i = 0; $i <count($array); $i++)
            <p>{{$array[$i]}}<p>
            @if($i == 2)
            <p>Voce ganhou</p>
            @endif
        @endfor

        @foreach($arraynomes as $nome)
        <p>{{$nome}}</p>
        @endforeach
        {{--Comentario do Blade--}}
@endsection

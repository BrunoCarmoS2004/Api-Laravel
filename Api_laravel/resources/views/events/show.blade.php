@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offser-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img  src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
            </div>
            <!---->
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><ion-icon class="icones" name="location-outline"></ion-icon> {{$event->city}}</p>
                <p class="events-participantes"><ion-icon class="icones"name="people-outline"></ion-icon> X participantes</p>
                <p class="event-owner"><ion-icon class="icones" name="star-outline"></ion-icon> Dono do Evento</p>
                <a href="#" class="btn btn-warning" id="event-submit">Confirmar Presença</a>
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach ($event -> items as $item)
                        <li><ion-icon class="icones" name="play-outline"></ion-icon>{{$item}}</li>
                    @endforeach
                </ul>
                <div class="col-md-12" id="description-container">
                    <h3>Sobre o evento:</h3>
                    <p class="event-description">{{$event->description}}</p>
                </div>
            </div>
        </div>
    </div>

@endsection

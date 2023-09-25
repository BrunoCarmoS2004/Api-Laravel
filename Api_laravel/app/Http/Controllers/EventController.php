<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    //Pegar todos os eventos
    public function index(){
    $events = Event::all();

    return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    /*Pegar informações do formulario*/
    public function store(Request $request){
        $event = new Event;

        $event->title = $request -> title;
        $event->city = $request -> city;
        $event->private = $request -> private;
        $event->description = $request -> description;

        $event->save();
        return redirect('/');
    }
}

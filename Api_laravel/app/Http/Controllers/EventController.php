<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
    $idade = 29;
    $nome = "Bruno";
    $arr = [1,2,3,4,5];
    $nomes = ["Bruno", "Rafael", "Gabriel", "Joao"];

    return view('welcome', [
        'nome'=> $nome,
        'idade'=> $idade,
        'profissao'=>"programador",
        'array' => $arr,
        'arraynomes'=>$nomes]);
    }

    public function create(){
        return view('events.create');
    }
}

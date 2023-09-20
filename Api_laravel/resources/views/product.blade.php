@extends('layouts.main')
@section('title','produto')
@section('content')
@if($id != null)
    <h1>Exibindo produdo id: {{$id}}</h1>
@endif
@endsection

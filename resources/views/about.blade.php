@extends('layouts.master');

@section('title')
    About
@endsection

@section('content')
   <h1>About</h1>
    @foreach ($data as $item)
        <ul>
            <li>Nombre: {{$item["nombre"]}}</li>
            <li>Email: {{$item["email"]}}</li>
            <li>Id: {{$item["id"]}}</li>
        </ul>
    @endforeach

@endsection
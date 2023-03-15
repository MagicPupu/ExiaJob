@extends('layout')

@section('content')
    <h1>coucou {{ auth()->user()->name }}</h1>

    <a href="#" onclick="document.getElementById('logout-form').submit()">
        <form action="{{ route('logout') }}" method="post" id="logout-form">@csrf</form>
        Se déconnecter
    </a>
@endsection
@extends('layout')

@section('content')
    <body>
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach

        <form action="{{ route('authenticate') }}" method="post">
            @csrf
            <input type="email" name="email">
            <input type="password" name="password">
            <button type="submit">Se connecter</button>
        </form>
    </body>
@endsection

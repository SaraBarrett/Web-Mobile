@extends('layouts.femaster')

@section('content')
    <h6>Info do Cesae</h6>
    <ul>
        <li>{{ $cesaeInfo['name'] }}</li>
        <li>{{ $cesaeInfo['address'] }}</li>
        <li>{{ $cesaeInfo['email'] }}</li>
    </ul>
    <h3>Sou uma blade para todos os users </h3>
    <ul>
        @foreach ($users as $user)
            <li>o nome é {{ $user['name'] }} e o email é {{ $user['email'] }} </li>
        @endforeach

    </ul>
@endsection

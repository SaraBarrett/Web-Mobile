@extends('layouts.femaster')

@section('content')
    @php
        $myvar = 'olá mundo';
        $myname = 'Sara';
    @endphp

    <img src="{{ asset('images/photo-1623172959921-630212f71058.avif') }}" alt="">
    <h5>Olá sou a nossa casa!</h5>
    <p>{{ $myvar }}</p>

    @if ($myname)
        <p>{{ $myname }}</p>
    @else
        <p>Não existe var myname</p>
    @endif
    <ul>
        <li><a href="{{ route('welcome') }}">Welcome</a></li>
        <li><a href="{{ route('users.all') }}">Todos os Users</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizador</a></li>
    </ul>
@endsection

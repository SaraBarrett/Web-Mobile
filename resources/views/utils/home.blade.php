@extends('layouts.femaster')

@section('content')
    @php
        $myvar = 'olá mundo';
        $myname = 'Sara';
    @endphp

    <img src="{{ asset('images/photo-1623172959921-630212f71058.avif') }}" alt="">
    <h5>Olá sou a nossa casa!</h5>
    <p>{{ $myFirstVar }}</p>

    <ul>
        @foreach ($weekDays as $day)
            <li>{{ $day }}</li>
        @endforeach
    </ul>

    @if ($myname)
        <p>{{ $myname }}</p>
    @else
        <p>Não existe var myname</p>
    @endif

    <h6>Dados do Curso</h6>
    <p>Nome: {{ $info['name'] }}</p>
    <p>Horas:{{ $info['hours'] }}h </p>
    <ul>
        <li><a href="{{ route('welcome') }}">Welcome</a></li>
        <li><a href="{{ route('users.all') }}">Todos os Users</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizador</a></li>
        <li><a href="{{route('tasks.all')}}">Todas as Tarefas</a></li>
    </ul>
@endsection

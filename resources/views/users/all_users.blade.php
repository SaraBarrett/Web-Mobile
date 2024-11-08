@extends('layouts.femaster')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h6>Info do Cesae</h6>
    <ul>
        <li>{{ $cesaeInfo['name'] }}</li>
        <li>{{ $cesaeInfo['address'] }}</li>
        <li>{{ $cesaeInfo['email'] }}</li>
    </ul>
    <h3>Sou uma blade para todos os users </h3>
    <form method="GET">
        <input value="{{request()->query('search')}}"  type="text" name="search" id="">
        <button class="btn btn-secondary">Procurar</button>

    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">NIF</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->nif }}</td>
                    <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Ver</a></td>
                    <td><a href="{{ route('users.delete', $user->id) }}" class="btn btn-danger">Apagar</a></td>
                </tr>
            @endforeach


        </tbody>
    </table>
    <ul>
        @foreach ($users as $user)
            <li>o nome é {{ $user->name }} e o email é {{ $user->email }} </li>
        @endforeach

    </ul>
@endsection

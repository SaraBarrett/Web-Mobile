@extends('layouts.femaster')


@section('content')
    <h1>Olá, aqui vais adicionar users</h1>
    <form method="POST" action="{{ route('users.create') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input name="name" required type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @error('name')
                nome inválido
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input required name="email" type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
                email inválido
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
            @error('password')
                password inválida
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submeter</button>
    </form>
@endsection

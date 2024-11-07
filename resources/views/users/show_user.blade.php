@extends('layouts.femaster')

@section('content')
    <h4>Cucu sou os dados de um user {{ $user->name }}</h4>
    <form method="POST" action="{{ route('users.create') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input value="{{ $user->name }}" name="name" required type="text" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
                nome inválido
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input value="{{ $user->email }}" disabled name="email" type="email" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
                email inválido
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Nif</label>
            <input value="{{ $user->nif }}" name="nif" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label class="form-label">Morada</label>
            <input value="{{ $user->address }}" name="address" type="text" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection

@extends('layouts.femaster')


@section('content')
    <h1>Olá, aqui vais adicionar Tarefas</h1>
    <form method="POST" action="{{ route('tasks.create') }}">
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
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input name="description" type="text" class="form-control" aria-describedby="emailHelp">
            @error('description')
                description inválida
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prazo</label>
            <input name="due_at" type="date" class="form-control" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">User</label>

            <select name="user_id" id="">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error('user_id')
                user_id inválido
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submeter</button>
    </form>
@endsection

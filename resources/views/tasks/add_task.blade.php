@extends('layouts.femaster')


@section('content')
    <h1>Olá, aqui vais {{ isset($task) ? 'actualizar' : 'adicionar' }} Tarefas</h1>
    <form method="POST" action="{{ route('tasks.create') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input name="name" value="{{ isset($task) ? $task->name : '' }}" required type="text" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('name')
                nome inválido
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input name="description" value="{{ isset($task) ? $task->description : '' }}" type="text"
                class="form-control" aria-describedby="emailHelp">
            @error('description')
                description inválida
            @enderror
        </div>
        @if (isset($task))
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prazo</label>
                <input value="{{ $task->due_at }}" name="due_at" type="date" class="form-control"
                    aria-describedby="emailHelp">
            </div>

            <div class="form-check">
                <label class="form-check-label" for="flexCheckDefault">
                    Estado
                </label>
                <input class="form-check-input" {{ $task->status == 1 ? 'checked' : '' }} type="checkbox" value=""
                    id="flexCheckDefault">
            </div>
        @endif
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">User</label>

            <select name="user_id" id="">
                <option value=""> Seleccione o User</option>
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

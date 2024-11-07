@extends('layouts.femaster')

@section('content')

    @if(session('successM'))
        <div class="alert alert-success">
            {{session('successM')}}
        </div>
    @endif
    
    <h1>Olá, aqui tens todas as Tarefas</h1>
    <div class="text-end">
        <button class="btn btn-secondary mb-3">Adicionar Tarefa</button>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Estado</th>
                <th scope="col">Data de Conclusão</th>
                <th scope="col">User</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->due_at }}</td>
                    <td>{{ $task->username }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

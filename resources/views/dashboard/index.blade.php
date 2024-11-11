@extends('layouts.femaster')

@section('content')
    <h5>Bem vindo ao teu Dashboard</h5>
    Olá {{ Auth::user()->name }}

    @if (Auth::user()->user_type == 1)
        <div class="alert alert-warning">
            és um admin e tens super poderes!
        </div>
    @endif
@endsection

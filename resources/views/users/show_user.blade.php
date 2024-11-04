@extends('layouts.femaster')

@section('content')
    <h4>Cucu sou os dados de um user {{ $user->name }}</h4>
    <h6>{{ $user->password }}</h6>
    <h6>{{ $user->nif }}</h6>
@endsection

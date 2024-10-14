<!DOCTYPE html>
<html lang="en">
@php
    $myvar = 'olá mundo';
    $myname = 'Sara';
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
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
    </ul>

</body>

</html>

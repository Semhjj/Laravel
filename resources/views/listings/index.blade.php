@extends('components.layout')
@section('content')

    {{--    {{$to_dos['email']}}--}}
    <div style="margin: auto; width: 1350px; display: grid; grid-template-columns: 40% 40%; grid-gap: 5%;">
        @foreach ($to_dos as $todo)
            <div style="padding: 25px; background: #8888; margin: 15px; width: 100%">
                <p>Email: {{ $todo->email}}</p>
                <p>Opdracht: {{ $todo->opdracht}}</p>
                <p>Opdracht omschrijving: {{ $todo->opdracht_omschrijving}}</p>
                <a href="/listings/{{$todo->id}}/edit">Opdracht aanpassen</a>
                <a href="/listings/{{$todo->id}}/tussenpagina">Verwijderen</a>
            </div>
        @endforeach
    </div>
@endsection

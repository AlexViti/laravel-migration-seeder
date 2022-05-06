@extends('templates.base')

@section('title', 'Trains')

@section('content')
    <h1>Trains</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
            </li>
        @endforeach
    </ul>
@endsection

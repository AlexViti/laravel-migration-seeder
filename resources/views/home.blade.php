@extends('templates.base')

@section('title', 'Trains')

@section('content')
    <h1>Trains</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                <a href="{{ route('show', $train->id) }}">
                    {{ $train->code }} || {{ $train->departure_station }} || {{ $train->departure_time }} || {{ $train->arrival_station }} || {{ $train->arrival_time }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $trains->links() }}
@endsection

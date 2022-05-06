@extends('templates.base')

@section('title', 'Trains')

@section('content')
    <h1>Trains</h1>
    <div class="container">
        <ul class="trains">
            @foreach ($trains as $train)
                <li>
                    <a href="{{ route('show', $train->id) }}">
                        {{ $train->code }} || {{ $train->departure_station }} || {{ $train->departure_time }} || {{ $train->arrival_station }} || {{ $train->arrival_time }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="pages">{{ $trains->links() }}</div>
    </div>
@endsection

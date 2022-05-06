@extends('templates.base')

@section('title', 'Trains')

@section('content')
    <h1>Trains</h1>
    <div class="container">
        <ul class="trains">
            @foreach ($trains as $train)
                <li>
                    <a href="{{ route('show', $train->id) }}">
                        <div>
                            <span>{{ $train->company }}</span>
                            <span>{{ $train->code }}</span>
                        </div>
                        <div>
                            <span>{{ $train->departure_station }}</span>
                            <span>{{ date("d/m/Y H:i", strtotime($train->departure_time)) }}</span>
                        </div>
                        <div>
                            <span>{{ $train->arrival_station }}</span>
                            <span>{{ date("d/m/Y H:i", strtotime($train->arrival_time)) }}</span>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="pages">{{ $trains->links() }}</div>
    </div>
@endsection

@extends('\templates\base')

@section('title', 'Trains')

@section('name', 'Trains')

@section('content')
<main>
  <ul>
    @foreach ($trains as $train)
      <li> {{ $train->company }}||{{ $train->code }}||{{ $train->departure_station }}: {{ $train->departure_time }}||{{ $train->arrival_station }}: {{ $train->arrival_time }}</li>
    @endforeach
  </ul>
</main>
@endsection

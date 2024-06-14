@extends("layout")

@section('title', 'Rezultatul Căutării')

@section("content")

<div class="result-search">
    <h2>Rezultatele Căutării</h2>
</div>
<br>

@if (isset($searchPerformed) && $searchPerformed)
    @if (count($results) > 0)
        @foreach ($results as $index => $result)
            <div class="route-container">
                <div class="route-value">
                    <div class="train_number">
                        <img src="{{ asset("Logo/Logo Principal.png") }}" alt="">
                        <h4>Ruta de tren: {{ $result->station_start }} <span>&#10230;</span> {{ $result->destination }}</h4>
                        <h4>Numărul Trenului: {{ $result->train_number }}</h4>
                    </div>

                    <hr>
                    <div class="train_info">
                        <div class="station">
                            <h3>{{ $result->station_start }}</h3>
                            <hr>
                            <h3>{{ $result->time_start }}</h3>
                        </div>
                        <div class="duration">
                            <p>Durata călătoriei</p>
                            <p>{{ $result->duration }}</p>
                        </div>
                        <div class="station">
                            <h3>{{ $result->destination }}</h3>
                            <hr>
                            <h3>{{ $result->time_destination }}</h3>
                        </div>
                        <a href="{{ route('biletes-home', ['station_start' => $result->station_start, 'destination' => $result->destination, 'bilet_id' => $result->id]) }}">
                            <button>Cumpără Bilet</button>
                        </a>
                    </div>
                </div>
                <hr>
                <br>
            </div>
        @endforeach
    @else
        <div class="search_error">
            <p class="errors">Această destinație nu a fost găsită.</p>
        </div>
        <br>
    @endif
@else
    <div class="search_error">
        <p class="errors">Căutarea nu a fost efectuată.</p>
    </div>
@endif
<br>

@endsection

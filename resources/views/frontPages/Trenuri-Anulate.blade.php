@extends("layout")
@section("title", "Trenuri Anulate")
@section("content")

<div class="result-search2">
    <h2>Curse anulate</h2>
</div>
<br>

@if (count($cancel) > 0)
    @foreach ($cancel as $index => $result)
        <div class="route-container">
            <div class="route-value">
                <div class="train_number">
                   <img src="{{asset("Logo/Logo Principal.png")}}" alt="">
                    <h4>Ruta de tren: {{ $result->station_start }}
                    <span>&#10230;</span> {{$result->destination}}</h4>
                    <h4>Numărul Trenului: {{ $result->train_number }}</h4>
                </div>

                <hr>
                <div class="train_infoCancel">
                    <div class="station">
                        <h3 class="csa">{{ $result->station_start}}</h3>
                        <h3 class="csa">{{ $result->time_start }}</h3>
                    </div>
                    <div class="station">
                        <h3 class="csa">{{ $result->destination }}</h3>
                        <h3 class="csa">{{ $result->time_destination }}</h3>
                    </div>
                </div>
            </div>
            <hr>
            <br>
        </div>
    @endforeach
@else
    <div class="search_error">
        <p>Nu există trenuri anulate pentru destinația căutată.</p>
    </div>
    <br>
@endif

@endsection

@extends("layout")

@section("title", "Mersul Trenului Bălți -> Mateuți -> Bălți")

@section("content")

<br>

<div class="wow fadeInLeft obj">
    <h3>Rutele de tren: Bălți -> Mateuți -> Bălți</h3>
</div>
<br>
<div class="wow fadeIn trv">
    <div class="map-alls">
        <img class="logo" src="{{ asset('Logo/Logo Principal.png') }}" alt="">
        <div class="txth2">
            <h2>Bălți -> Mateuți -> Bălți</h2>
        </div>
        <button class="select" onclick="toggleVisibility(this, '.map-alls')">Stații</button>
    </div>
    <div class="formular-abonament">
        <div class="all-log">
            <h3>Stații de oprire</h3>

            <ul class="station-list">
                <li>
                    <span class="station">Alexandreni</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Mărculești</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Florești</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Rogojeni</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Cobilea</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Soldănești</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Mateuți</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="map"></div>

<script src="{{ asset('Map.js/mateuti.js') }}"></script>
<script src="{{ asset('JS/slider.js') }}"></script>
<script src="{{ asset('JS/dropdownForm.js') }}"></script>
@endsection

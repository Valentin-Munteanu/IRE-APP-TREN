@extends("layout")

@section("title", "Mersul Trenului Chișinău -> Odesa -> Chișinău")

@section("content")

<br>

<div class="wow fadeInLeft obj">
    <h3>Rutele de tren: Chișinău -> Odesa -> Chișinău</h3>
</div>
<br>
<div class="wow fadeIn trv">
    <div class="map-alls">
        <img class="logo" src="{{ asset('Logo/Logo Principal.png') }}" alt="">
        <div class="txth2">
            <h2>Chișinău -> Odesa/Bender -> Chișinău</h2>
        </div>
        <button class="select" onclick="toggleVisibility(this, '.map-alls')">Stații</button>
    </div>
    <div class="formular-abonament">
        <div class="all-log">
            <h3>Stații de oprire</h3>

            <ul class="station-list">
                <li>
                    <span class="station">Bender</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Tiraspol</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Cuciurgan</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Razdelinaia</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Odesa</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="map4"></div>

<br>

<div class="wow fadeIn trv">
    <div class="map-alls">
        <img class="logo" src="{{ asset('Logo/Logo Principal.png') }}" alt="">
        <div class="txth2">
            <h2>Chișinău -> Odesa/Basarabeasca -> Chișinău</h2>
        </div>
        <button class="select" onclick="toggleVisibility(this, '.map-alls')">Stații</button>
    </div>
    <div class="formular-abonament">
        <div class="all-log">
            <h3>Stații de oprire</h3>

            <ul class="station-list">
                <li><span class="station">Cainari</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Basarabeasca</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Arțâz:</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Belgorod-Dnistrovsk:</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Odesa</span></li>
            </ul>
        </div>
    </div>
</div>
<div id="map"></div>

<script src="{{ asset('Map.js/odesaBasarabeasca.js') }}"></script>
<script src="{{ asset('Map.js/odesaBender.js') }}"></script>

<script src="{{ asset('JS/slider.js') }}"></script>
<script src="{{ asset('JS/dropdownForm.js') }}"></script>
@endsection

@extends("layout")

@section("title", "Mersul Trenului Chișinău -> Cahul -> Chișinău")

@section("content")

<br>

<div class="wow fadeInLeft obj">
    <h3>Rutele de tren: Chișinău -> Cahul -> Chișinău</h3>
</div>
<br>

<div class="wow fadeIn trv">
    <div class="map-alls">
        <img class="logo" src="{{ asset('Logo/Logo Principal.png') }}" alt="">
        <div class="txth2">
            <h2>Chișinău -> Cahul -> Chișinău</h2>
        </div>
        <button class="select" onclick="toggleVisibility(this, '.map-alls')">Stații</button>
    </div>
    <div class="formular-abonament">
        <div class="all-log">
            <h3>Stații de oprire</h3>

            <ul class="station-list">
                <li><span class="station">Căinari</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Zloți</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Ciuflești</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Cimișlia</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Basarabeasca</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Comrat</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Iargara</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Prut 1</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Prut 2</span></li>
            </ul>
            <ul class="station-list">
                <li><span class="station">Cahul</span></li>
            </ul>
        </div>
    </div>
</div>
<div id="map"></div>

<script src="{{ asset('Map.js/cahul.js') }}"></script>
<script src="{{ asset('JS/slider.js') }}"></script>
<script src="{{ asset('JS/dropdownForm.js') }}"></script>
@endsection

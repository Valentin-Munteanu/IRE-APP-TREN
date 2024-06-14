@extends("layout")

@section("title", "Mersul Trenului Chișinău -> Vălcineț -> Chișinău")

@section("content")

<br>

<div class="wow fadeInLeft obj">
    <h3>Rutele de tren: Chișinău -> Vălcineț (Otaci) -> Chișinău</h3>
</div>
<br>
<div class="wow fadeIn trv">
    <div class="map-alls">
        <img class="logo" src="{{ asset('Logo/Logo Principal.png') }}" alt="">
        <div class="txth2">
            <h2>Chișinău -> Vălcineț (Otaci) -> Chișinău</h2>
        </div>
        <button class="select" onclick="toggleVisibility(this, '.map-alls')">Stații</button>
    </div>
    <div class="formular-abonament">
        <div class="all-log">
            <h3>Stații de oprire</h3>

            <ul class="station-list">
                <li>
                    <span class="station">Ungheni</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Fălești</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Bălți</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Drochia</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Donduseni</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Ocnița</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Girbova</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Năslavcea</span>
                </li>
            </ul>
            <ul class="station-list">
                <li>
                    <span class="station">Vălcineț (Otaci)</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="map"></div>

<script src="{{ asset('Map.js/otaci.js') }}"></script>
<script src="{{ asset('JS/slider.js') }}"></script>
<script src="{{ asset('JS/dropdownForm.js') }}"></script>
@endsection

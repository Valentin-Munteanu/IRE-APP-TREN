@extends("layout")

@section("title", "Mersul Trenului Chisinau->Basarabeasca->Chisinau")

@section("content")

<br>


<div class="wow fadeInLeft obj">
    <h3>Rutele de tren: Chișinău -> Basarabeasca -> Chișinău</h3>
</div>
<br>
<div class="wow fadeIn trv">
    <div class="map-alls">
        <img class="logo" src="{{ asset('Logo/Logo Principal.png') }}" alt="">
        <div class="txth2">
            <h2>Chișinău -> Basarabeasca -> Chișinău</h2>
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
                <span class="station">Căușeni</span>
            </li>
        </ul>
        <ul class="station-list">
            <li>
                <span class="station">Zaim</span>
            </li>
        </ul>
        <ul class="station-list">
            <li>
                <span class="station">Căinari</span>
            </li>
        </ul>
        <ul class="station-list">
            <li>
                <span class="station">Zloți</span>
            </li>
        </ul>
        <ul class="station-list">
            <li>
                <span class="station">Ciuflești</span>
            </li>
        </ul>
        <ul class="station-list">
            <li>
                <span class="station">Cimișlia</span>
            </li>
        </ul>
        <ul class="station-list">
            <li>
                <span class="station">Basarabeasca</span>
            </li>
        </ul>
    </div>
</div>

</div>
<div id="map"></div>






<script src="{{asset("Map.js/basarabeasca.js")}}"></script>
<script src="{{asset("JS/slider.js")}}"></script>
<script src="{{asset("JS/dropdownForm.js")}}"></script>
@endsection

@extends("layout")

@section("title", "Oferte de călătorie")

@section("content")

<div class="wow fadeIn banner">
    <h2>Oferte de călătorie</h2>
</div>
<br>
<div class="wow fadeIn banners">
    <div class="modal_div">
        <h2>Reduceri la călătorii internaționale</h2>
    </div>
    <br>
    <img src="{{asset('Images/bannerReclama.jpg')}}" alt="">
</div>

<div class="wow fadeIn banners2">
    <div class="modal_div">
        <h3>Călătorește de 3 ori într-o săptămână pe rutele internaționale și vei primi o reducere de 30% în toate clasele de confort.</h3>
    </div>
</div>
<br>
<div class="wow fadeIn banners">
    <div class="modal_div">
        <h2>Abonamente de călătorie pe rutele regionale și interregionale</h2>
    </div>
    <br>
    <a href="{{route('Abonamente')}}"><img src="{{asset('Images/Abonament Regional Class1.png')}}" alt=""></a>
    <br>
    <a href="{{route('Abonamente')}}"><img src="{{asset('Images/Abonament Regional Class2.png')}}" alt=""></a>
</div>

<div class="wow fadeIn banners2">
    <div class="modal_div">
        <p>
            Cu Abonamentul IRE Regional, ai posibilitatea de a călători cu trenul pe rutele regionale până la 110 km distanță, la un preț avantajos. Acest abonament este ideal pentru cei care se deplasează zilnic la serviciu, oferind o soluție economică și practică. În plus, abonamentul asigură flexibilitate în alegerea orelor de călătorie și acces la diverse facilități oferite de compania feroviară. Alege Abonamentul IRE Regional pentru o călătorie confortabilă și eficientă!
        </p>
    </div>
</div>
<br>
<div class="wow fadeIn banners">
    <div class="modal_div">
        <h2>Abonamente de călătorie pe rutele regionale și interregionale</h2>
    </div>
    <br>
    <a href="{{route('Abonamente')}}"><img src="{{asset('Images/Abonament InterRegional Class1.png')}}" alt=""></a>
    <br>
    <a href="{{route('Abonamente')}}"><img src="{{asset('Images/Abonament InterRegional Class2.png')}}" alt=""></a>
</div>

<div class="wow fadeIn banners2">
    <div class="modal_div">
        <p>
            Cu Abonamentul IRE InterRegional, ai posibilitatea de a călători cu trenul pe rutele atât regionale, cât și interregionale nelimitat, la un preț avantajos. Acest abonament este ideal pentru cei care se deplasează la distanțe mari, oferind o soluție economică și practică. Alege Abonamentul IRE InterRegional și călătorește în orice punct al Moldovei.
        </p>
    </div>
</div>
<br>
<div class="wow fadeIn banners">
    <div class="modal_div">
        <h2>Curse Speciale</h2>
    </div>
    <br>
    <img class="ims" src="{{asset('Images/banner3.jpg')}}" alt="">
</div>

<div class="wow fadeIn banners2">
    <div class="modal_div">
        <h4>
            Ai posibilitatea de a închiria un tren pentru o zi pentru a călători prin punctele turistice din Republica Moldova. Poți călători cu apropiații și a primi o experiență de neuitat.Pentru detalii ne expediezi o scrisoare din pagina de contacte.
        </h4>
    </div>
</div>

@endsection

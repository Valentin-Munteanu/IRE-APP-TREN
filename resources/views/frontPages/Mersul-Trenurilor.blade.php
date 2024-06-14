@extends("layout")

@section("title", "Mersul Trenurilor")

@section("content")
<div class="mersul-trenuri">
    <h2>Mersul Trenurilor (Harta Rutelor)</h2>
</div>
<div class="text-national">
    <h2>Rute Internaționale</h2>
    <h2>Rute Naționale</h2>
</div>
<div class="wow fadeIn list-routesNational">
    <div class="modal_div">
        <img src="{{asset('Images/Tren1.jpg')}}" alt="">
        <h3>Chișinău -> Iași</h3>
        <a href="{{route("Iasi-map")}}"><button>Vezi Harta Rutei</button></a>
    </div>

    <div class="modal_div" id="modal">
        <img src="{{asset('Images/Tren2.jpg')}}" alt="">
        <h3>Chișinău -> Ungheni</h3>
        <a href="{{route("Ungheni")}}"><button>Vezi Harta Rutei</button></a>
    </div>
</div>

<div class="wow fadeIn list-routesNational">
    <div class="modal_div">
        <img src="{{asset('Images/Tren7.jpg')}}" alt="">
        <h3>Chișinău -> Odesa/Bender</h3>
        <a href="{{route("Odesa-Bender")}}"><button>Vezi Harta Rutei</button></a>
    </div>

    <div class="modal_div" id="modal">
        <img src="{{asset('Images/Tren10.jpg')}}" alt="">
        <h3>Chișinău -> Basarabeasca</h3>
        <a href="{{route("Basarabeasca")}}"><button>Vezi Harta Rutei</button></a>
    </div>
</div>

<div class="wow fadeIn list-routesNational">
    <div class="modal_div">
        <img src="{{asset('Images/Tren12.jpg')}}" alt="">
        <h3>Chișinău -> Odesa/Basarabeasca</h3>
        <a href="{{route("Odesa-Bender")}}"><button>Vezi Harta Rutei</button></a>
    </div>

    <div class="modal_div" id="modal">
        <img src="{{asset('Images/tren14.jpg')}}" alt="">
        <h3>Bălți -> Mateuți</h3>
        <a href="{{route("Mateuti")}}"><button>Vezi Harta Rutei</button></a>
    </div>
</div>

<div class="wow fadeIn list-routesNational">
    <div class="modal_div">
        <img src="{{asset('Images/DPK7.jpg')}}" alt="">
        <h3>Chișinău -> Cernăuți</h3>
        <a href="{{route("Cernauti")}}"><button>Vezi Harta Rutei</button></a>
    </div>

    <div class="modal_div" id="modal">
        <img src="{{asset('Images/Tren11.jpg')}}" alt="">
        <h3>Chișinău -> Vălcineț (Otaci)</h3>
        <a href="{{route("Otaci")}}"><button>Vezi Harta Rutei</button></a>
    </div>
</div>

<div class="wow fadeIn list-routesNational">
    <div class="modal_div">
        <img src="{{asset('Images/DPK1.webp')}}" alt="">
        <h3>Chișinău -> Galați/Etulia</h3>
        <a href="{{route("Galati")}}"><button>Vezi Harta Rutei</button></a>
    </div>

    <div class="wow fadeIn modal_div" id="modal">
        <img src="{{asset('Images/DPK5.webp')}}" alt="">
        <h3>Bălți -> Ungheni</h3>
        <a href="{{route("Balti-Ungheni")}}"><button>Vezi Harta Rutei</button></a>
    </div>
</div>

<div class="wow fadeIn list-routesNational">
    <div class="modal_div">
        <img src="{{asset('Images/Tren3.jpg')}}" alt="">
        <h3>Chișinău -> Galați/Cahul</h3>
        <a href="{{route("Galati")}}"><button>Vezi Harta Rutei</button></a>
    </div>

    <div class="modal_div" id="modal">
        <img src="{{asset('Images/Tren 21.jpg')}}" alt="">
        <h3>Chișinău -> Cahul</h3>
        <a href="{{route("Cahul")}}"><button>Vezi Harta Rutei</button></a>
    </div>
</div>
@endsection

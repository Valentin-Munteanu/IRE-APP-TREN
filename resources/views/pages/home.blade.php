@extends("layout")

@section('title', 'Acasă')

@section("content")

<div class="container">
    <div class="swiper">
        <div class="swiper-wrapper" data-swiper-preload="false">
          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/Tren1.jpg")}}" alt=""></div>
          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/DPK6.jpg")}}" alt=""></div>
          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/Tren3.jpg")}}" alt=""></div>
          ...
        </div>
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>


                <form method="GET" action="{{ route("SearchResult") }}" id="search-form">
                    @csrf
                    <div class="formular">
                <h3>Cumpărați bilete Online</h3>
                <h4>Cautați destinația dorită</h4>

                    <div class="form-group">
                        <label for="search"></label>
                        <input type="text" class="input_right" id="search" name="search" value="{{ isset($search) ? $search : old('search') }}" list="suggestions" placeholder="Stația de plecare" required>

                    </div>
                    <div id="switch-button">
                        <button id="switch-input-values" type="button" class="btn btn-primary"><i class="fa-solid fa-arrows-up-down"></i></button>
                       </div>

                    <div class="form-group">
                        <label for="search2"></label>
                        <input type="text" class="input_left" id="search2" name="search2" value="{{ isset($search2) ? $search2 : old('search2') }}" list="suggestions" placeholder="Stația de sosire" required>

                    </div>
<div class="button-search">
    <button id="search-button" type="submit" class="btn btn-primary">Caută</button>
</div>
                </div>

                </form>
            </div>

</div>
</div>

</div>
<br>
<br>
<br>

<div class="wow fadeIn pages-home">
    <div class="oferte">
    <a href="{{route("Oferte")}}"><h2>Oferte de calătorie</h2></a>

</div>
<div class="information">
   <a href="{{route("Intrebari")}}"><h2>Informații</h2></a>
</div>
</div>
<div class="wow fadeIn pages-home2">

<div class="despre-back">
   <a href="{{route("Despre")}}"><h2>Despre Noi</h2></a>
</div>

<div class="info-contact">
   <a href="{{route("Contacte")}}"><h2>Contacte</h2></a>
</div>
</div>


</div>
<script src="{{asset("JS/slider.js")}}"></script>
<script src="{{asset('JS/suggestion.js')}}"></script>

@endsection

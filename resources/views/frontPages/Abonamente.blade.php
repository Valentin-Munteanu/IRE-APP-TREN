@extends("layout")

@section("title", "Abonamente pentru călătorii")

@section("content")
    <div class="wow fadeIn abonamente">
        <h2>Abonamente de călătorie</h2>
        <div class="swiper">
            <div class="swiper-wrapper" data-swiper-preload="false">
              <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/Abonament Regional Class1.png")}}" alt=""></div>
              <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/Abonament Regional Class2.png")}}" alt=""></div>
              <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/Abonament InterRegional Class1.png")}}" alt=""></div>
              <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/Abonament InterRegional Class2.png")}}" alt=""></div>

              ...
            </div>
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
</div>
<br>
<div class="wow fadeInLeft info-abonament">
    <div class="modal_div">
<h3>Cumpără abonamente lunare pe rutele regionale si InterRegionale</h3>
<p>ATENȚIE ! Abonamentele nu sunt valabile pe rutele internaționale</p>
</div>
</div>
<br>
<div class="wow fadeIn back-info">
<h3>Călătorește prin Republica Moldova la preț avantajos</h3>
<div class="m-foto">
    <img src="https://w7.pngwing.com/pngs/454/901/png-transparent-flag-of-moldova-flag-of-cuba-national-flag-grunge-effect-miscellaneous-flag-symbol.png" alt="" >
</div>
</div>
<div class="wow fadeIn reguli">
<div class="modal_div">
    <h3>Reguli de călătorie cu abonament IRE</h3>

    <ul>
        <li><p>Abonamentul regional și InterRegional de călătorie este disponibil până la 30 de zile.</p></li>
        <li><p>Timpul de la 0 până la 30 de zile se ia în considerare începând cu data procurării.</p></li>
        <li><p>Abonamentul regional este valabil în raza de 110 km distanță.</p></li>
        <li><p>Abonamentul InterRegional este valabil în raza de peste 110 km distanță.</p></li>

        <li><p>Atât pe abonamentul regional, cât și InterRegional puteți circula pe ambele tipuri de trenuri. Însă, în cazul în care vă deplasați cu trenul InterRegional pe o distanță mai mare de 110 de km, va trebui să achitați călătoria de la 110 km până la destinația dvs.</p></li>
        <li><p>Această distanță se calculează conform traseului parcurs de pasager.</p></li>
        <li><p>Dacă dețineți abonament InterRegional, puteți călători fără restricții de distanță.</p></li>
        <li><p>Abonamentul poate fi primit la casele gărilor feroviare în funcție de locație. În cazul în care activitatea gării sau a caselor de bilete este sistată sau nu este disponibilă în stațiile de mărfuri/pasageri sau în stațiile de tip P.O , atunci prezentați confirmarea abonamentului de pe e-mailul dvs însoțitorului de vagon.</p></li>
        <li><p>Abonamentul poate fi anulat sau restituit din anumite motive ale pasagerului.</p></li>
        <li><p>Puteți anula abonamentul dacă ne expediați o cerere de anulare a abonamentului de călătorie. Cererea o puteți scrie pe pagina de contact in formularul de completare,veți primi un raspuns in timp de 24 ore</p></li>
    </ul>
</div>
</div>
<div class="wow fadeInLeft sel">
    <h3>Selectează abonamentul de călătorie</h3>
</div>
<br>
<div class="wow fadeIn buy">
    <div class="abonament-alls">
        <img src="{{ asset('Images/Abonament Regional Class1.png') }}" alt="">
        <button class="select" onclick="toggleVisibility(this, '.abonament-alls')">Selecteză</button>
    </div>
    <div class="wow fadeIn formular-abonament">
        <div class="all-log">
            <br>
            <h3>Completează formularul pentru o persoană</h3>
            <div class="login_form">
                <div class="auth_form">
                    <form action="{{route("AbonamentIRC")}}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Numele">
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="text" name="lastname" placeholder="Prenumele">
                        @error('lastname')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="email" name="email" placeholder="Email">
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                        <div class="prices">
                            <button disabled value="450 lei">450 lei</button>
                            <input type="hidden" name="price" value="450 lei">
                              </div>
                        <div class="button-send">
                            <button>Trimite Formular</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<div class="wow fadeIn buy">
    <div class="wow fadeIn abonament-alls">
        <img src="{{ asset("Images/Abonament Regional Class2.png") }}" alt="">
        <button class="select" onclick="toggleVisibility(this, '.abonament-alls')">Selecteză</button>
    </div>
    <div class="formular-abonament">
        <div class="all-log">
            <br>
            <h3>Completează formularul pentru o persoană</h3>
            <div class="login_form">
                <div class="auth_form">
                    <form action="{{route("AbonamentIRC")}}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Numele">
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="text" name="lastname" placeholder="Prenumele">
                        @error('lastname')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="email" name="email" placeholder="Email">
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                        <div class="prices">
                            <button disabled value="300 lei">300 lei</button>
                            <input type="hidden" name="price" value="300 lei">
                              </div>
                        <div class="button-send">
                            <button>Trimite Formular</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<div class="wow fadeIn buy">
    <div class="wow fadeIn abonament-alls">
        <img src="{{ asset("Images/Abonament InterRegional Class1.png") }}" alt="">
        <button class="select" onclick="toggleVisibility(this, '.abonament-alls')">Selecteză</button>
    </div>
    <div class="formular-abonament">
        <div class="all-log">
            <br>
            <h3>Completează formularul pentru o persoană</h3>
            <div class="login_form">
                <div class="auth_form">
                    <form action="{{route("AbonamentIRC")}}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Numele">
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="text" name="lastname" placeholder="Prenumele">
                        @error('lastname')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="email" name="email" placeholder="Email">
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                        <div class="prices">
                            <button disabled value="1200 lei">1200 lei</button>
                            <input type="hidden" name="price" value="1200 lei">
                              </div>
                        <div class="button-send">
                            <button>Trimite Formular</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>

<div class="wow fadeIn buy">
    <div class="wow fadeIn abonament-alls">
        <img src="{{ asset('Images/Abonament InterRegional Class2.png') }}" alt="">
        <button class="select" onclick="toggleVisibility(this, '.abonament-alls')">Selecteză</button>
    </div>
    <div class="formular-abonament">
        <div class="all-log">
            <br>
            <h3>Completează formularul pentru o persoană</h3>
            <div class="login_form">
                <div class="auth_form">
                    <form action="{{route("AbonamentIRC")}}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Numele">
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="text" name="lastname" placeholder="Prenumele">
                        @error('lastname')
                            <p>{{ $message }}</p>
                        @enderror
                        <input type="email" name="email" placeholder="Email">
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                        <div class="prices">
                            <button disabled value="900 lei">900 lei</button>
                            <input type="hidden" name="price" value="900 lei">
                              </div>
                        <div class="button-send">
                            <button>Trimite Formular</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{asset("JS/slider.js")}}"></script>
<script src="{{asset("JS/dropdownForm.js")}}"></script>
@endsection

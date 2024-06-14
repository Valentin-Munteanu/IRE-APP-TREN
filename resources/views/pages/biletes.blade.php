<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cumpără bilete online</title>
    <link rel="stylesheet" href="{{asset("Scss/app.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="icon" href="{{asset('Logo/Logo Principal.png')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script defer src="{{asset("JS/dropdown.js")}}"></script>
<script defer src="{{asset("JS/popUp.js")}}"></script>
<script defer src="{{asset("JS/popup-Img.js")}}"></script>
<script defer src="{{asset("JS/slider-PopUp.js")}}"></script>

</head>


<body>

    <div>

        <header class="biletes-header">
<nav>
    <div class="img_reverse">
        <img src="{{asset("Images/trainBas.png")}}" alt="">
    </div>

<div class="all-header">
    <a href="{{ route("home")}}"><div class="style-header">Anulează</div></a>
</div>

<div class="all-header2">
    <a><div class="style-header">Bilete</div></a>
</div>


<div class="all-header3">
    <a><div class="style-header">Date Pasageri</div></a>
</div>
<img src="{{asset("Images/trainBas.png")}}" alt="">

</nav>

                </header>
                <div class="route-container">
<div class="train_number">
<div class="train_info">
        @foreach ($biletes as $bilete)
        <p>Numărul trenului: {{$bilete->number_train}}</p>
            @foreach ($routes as $ret)

            @if ($ret->biletes_id == $bilete->id)
            <div class="station">
                    <h3>{{ $ret->station_start}}</h3>
                    <h3>Ora Plecarii: {{$ret->time_start}}</h3>
            </div>
            <span>&#10230;</span>
            <div class="station">
                    <h3>{{ $ret->destination}}</h3>
                    <h3>Ora Sosirii: {{$ret->time_destination}}</h3>
                </div>


                    <div class="duration">
    <p>Durata calatoriei: {{$ret->duration}}</p>
</div>
                @endif
            </div>
        </div>
        </div>
            @endforeach

<div class="info_bilet">
    <h3>Cumpărați bilete online într-un mod simplu si ajungeți ușor la destinație</h3>
    <div class="init-date">
        <button id="select-date-1" data-date="14-06-2024">14 Iunie 2024</button>
    </div>
            <p id="price1" style="display: none;">{{$bilete->price_class1}}</p>
    <p id="price2" style="display: none;">{{$bilete->price_class2}}</p>
    <p id="price3" style="display: none;">{{$bilete->price_class2}}</p>
    <p id="price4" style="display: none;">{{$bilete->price_class2}}</p>

        @endforeach
</div>
    </div>



    {{-- Vagon 1 --}}

    <div class="vagon_info">
        <div class="train_number">
<div class="train_info">
        @foreach ($biletes as $bilete)
        <div class="station">
        <h3>Clasa {{$bilete->class1c}}C</h3>
        <p>Vagonul {{$bilete->vagon_number1}}</p>
        <div class="icons">
            <i class="fa-solid fa-toilet"></i>
            <i class="fa-regular fa-snowflake"></i>
            <i class="fa-solid fa-plug"></i>
            <i class="fa-solid fa-wifi"></i>
        </div>
        {{-- popUp --}}
        <div class="modal-background" id="modal-background">
<div class="pop-up modal" id="popup">
<p>WC <i class="fa-solid fa-toilet"></i></p>
<p>Aer condiționat <i class="fa-regular fa-snowflake"></i></p>
<p>Priză <i class="fa-solid fa-plug"></i></p>
<p>Wifi <i class="fa-solid fa-wifi"></i></p>

</div>
</div>

    </div>
    <h4>Vagon cu locuri pe scaune</h4>
        <p>Prețul {{$bilete->price_class1}}</p>
        <button class="select"  onclick="toggleDropdown(this)">Selectează</button>
</div>
    </div>
    </div>
    @endforeach

        <div class="vagon">
            <div class="locuri">
                @for ($i = 1; $i <= 30; $i++)
                    @if ($i <= 14)
                        <button class="seat @if (in_array($i, $selectedSeats)) seat-selected @endif" value="{{ $i }}" onclick="seatClickHandler(event, {{ $i }})">{{ $i }}</button>
                    @else
                    <div class="bst">
                        <button class="seat-disabled" value="{{ $i }}" disabled>{{ $i }}</button>
                    </div>
                    @endif
                @endfor
            </div>
<div class="inf">
    <p>Selectează maxim 4 locuri: </p>
    <div class="seets_info">
    <p>Loc ocupat: </p>
        <div class="disable"></div>
        <p>Loc disponibil: </p>
        <div class="enable"></div>
    </div>
</div>

                <div class="complete-form">
                    <div class="vagon-image">
                        <button class="open" onclick="openModal()">Clasa 1 foto</button>
                     </div>
                <div>Total: <span id="total-price">0.00 MDL</span></div>
                <a href="#" data-date="10-06-2024" onclick="continueBooking()"><button class="open">Completează formular</button></a>

                </div>
                <div class="modal-popUp" id="myModal">
                <div class="popup-images">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-swiper-preload="false">
                          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/VAGON1A.jpg")}}" alt=""></div>
                          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/VAGON1B.jpg")}}" alt=""></div>
                          <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/VAGON1C.jpeg")}}" alt=""></div>
                          ...
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    </div>
                </div>

                    </div>
            </div>

        </div>
        </div>

        </div>
        </div>
    </div>
    </div>
    </div>


    <br>
<br>
<br>
<br>
    {{-- Vagon 2 --}}

    <div class="vagon_info">
        <div class="train_number">
<div class="train_info">
        @foreach ($biletes as $bilete)
        <div class="station">
        <h3>Clasa {{$bilete->class2c}}C</h3>
        <p>Vagonul {{$bilete->vagon_number2}}</p>
        <div class="icons">
            <i class="fa-solid fa-toilet"></i>
            <i class="fa-regular fa-snowflake"></i>
            <i class="fa-solid fa-plug"></i>
            <i class="fa-solid fa-wifi"></i>
        </div>

    </div>

    <h4 >Vagon cu locuri pe scaune</h4>
        <p >Prețul {{$bilete->price_class2}}</p>
        <button class="select"  onclick="toggleDropdown2(this)">Selectează</button>
</div>
    </div>
    </div>
    @endforeach

    <div class="vagon2">
        <div class="locuri2">
            @for ($i = 1; $i <= 80; $i++)
                @if ($i <= 36)
                <div>
                    <button class="seat @if (in_array($i, $selectedSeats2)) seat-selected @endif" value="{{ $i }}" onclick="seatClickHandler2(event, {{ $i }})">{{ $i }}</button>
    </div>
    <br>
                @else
                <br>
                <div class="bst">
                    <button class="seat-disabled" value="{{ $i }}" disabled>{{ $i }}</button>
                </div>
                @endif
            @endfor
    </div>

    <div class="inf">
        <p>Selectează maxim 4 locuri: </p>
        <div class="seets_info">
        <p>Loc ocupat: </p>
            <div class="disable"></div>
            <p>Loc disponibil: </p>
            <div class="enable"></div>
        </div>
    </div>


    <div class="complete-form">
        <div class="vagon-image">
        <button class="open" onclick="openModal2()">Clasa 2 foto</button>
         </div>
    <div>Total: <span id="total-price-vagon2">0.00 MDL</span></div>
    <a href="#" data-date="10-06-2024" onclick="continueBooking()"><button class="open">Completează formular</button></a>

    </div>
    <div class="modal-popUp" id="myModal2">
    <div class="popup-images">
        <div class="swiper">
            <div class="swiper-wrapper" data-swiper-preload="false">
              <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/VAGON2.jpg")}}" alt=""></div>
              <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/tren8.jpg")}}" alt=""></div>
              <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/tren9.jpg")}}" alt=""></div>
              ...
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        </div>
    </div>

</div>

</div>
</div>
</div>
</div>

<br>
<br>
    <br>
    <br>


    {{-- Vagon3 --}}
    <div class="vagon-select">

        <div class="vagon_info">
            <div class="train_number">
    <div class="train_info">
            @foreach ($biletes as $bilete)
            <div class="station">
            <h3>Clasa {{$bilete->class2c}}C</h3>
            <p>Vagonul {{$bilete->vagon_number3}}</p>
            <div class="icons">
                <i class="fa-solid fa-toilet"></i>
                <i class="fa-regular fa-snowflake"></i>
                <i class="fa-solid fa-plug"></i>
                <i class="fa-solid fa-wifi"></i>
            </div>

        </div>
        <h4>Vagon cu locuri pe scaune</h4>
            <p>Prețul {{$bilete->price_class2}}</p>
            <button class="select"  onclick="toggleDropdown3(this)">Selectează</button>
    </div>
        </div>
        </div>
        @endforeach
    <div class="vagon3">
        <div class="locuri3">
            @for ($i = 1; $i <= 80; $i++)
                @if ($i <= 40)
                <div>
                    <button class="seat @if (in_array($i, $selectedSeats3)) seat-selected @endif" value="{{ $i }}" onclick="seatClickHandler3(event, {{ $i }})">{{ $i }} </button>
        </div>
        {{-- Spatiere intr-e locuri --}}
        <br>
                @else
                <br>
                <div class="bst">
                    <button class="seat-disabled" value="{{ $i }}" disabled>{{ $i }}</button>

                </div>
                @endif
            @endfor
        </div>
        <div class="inf">
            <p>Selectează maxim 4 locuri: </p>
            <div class="seets_info">
            <p>Loc ocupat: </p>
                <div class="disable"></div>
                <p>Loc disponibil: </p>
                <div class="enable"></div>
            </div>
        </div>


        <div class="complete-form">
        <div class="vagon-image">
        <button class="open" onclick="openModal3()">Clasa 2 foto</button>
         </div>
    <div>Total: <span id="total-price-vagon3">0.00 MDL</span></div>
    <a href="#" data-date="10-06-2024" onclick="continueBooking()"><button class="open">Completează formular</button></a>

    </div>
    <div class="modal-popUp" id="myModal3">
    <div class="popup-images">
        <div class="swiper">
            <div class="swiper-wrapper" data-swiper-preload="false">
              <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/VAGON2.jpg")}}" alt=""></div>
              <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/tren8.jpg")}}" alt=""></div>
              <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/tren9.jpg")}}" alt=""></div>
              ...
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        </div>
    </div>


    </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    {{-- Vagon 4  --}}
    <div class="vagon-select">

        <div class="vagon_info">
            <div class="train_number">
    <div class="train_info">
            @foreach ($biletes as $bilete)
            <div class="station">
            <h3>Clasa {{$bilete->class2c}}C</h3>
            <p>Vagonul {{$bilete->vagon_number4}}</p>
            <div class="icons">
                <i class="fa-solid fa-toilet"></i>
                <i class="fa-regular fa-snowflake"></i>
                <i class="fa-solid fa-plug"></i>
                <i class="fa-solid fa-wifi"></i>
            </div>

        </div>
        <h4>Vagon cu locuri pe scaune</h4>
            <p>Prețul {{$bilete->price_class2}}</p>
            <button class="select"  onclick="toggleDropdown4(this)">Selectează</button>
    </div>
        </div>
        </div>
    @endforeach
    <div class="vagon4">
        <div class="locuri4">
            @for ($i = 1; $i <= 30; $i++)
                @if ($i <= 10)
                <div>
                    <button class="seat @if (in_array($i, $selectedSeats4)) seat-selected @endif" value="{{ $i }}" onclick="seatClickHandler4(event, {{ $i }})">{{ $i }}</button>
        </div>
        <br>
                @else
                <br>
                <div class="bst">
                    <button class="seat-disabled" value="{{ $i }}" disabled>{{ $i }}</button>
                </div>
                @endif
            @endfor
        </div>

        <div class="inf">
            <p>Selectează maxim 4 locuri: </p>
            <div class="seets_info">
            <p>Loc ocupat: </p>
                <div class="disable"></div>
                <p>Loc disponibil: </p>
                <div class="enable"></div>
            </div>
        </div>

        <div class="complete-form">
            <div class="vagon-image">
            <button class="open" onclick="openModal4()">Clasa 2 foto</button>
             </div>
        <div>Total: <span id="total-price-vagon4">0.00 MDL</span></div>
        <a href="#" data-date="10-06-2024" onclick="continueBooking()"><button class="open">Completează formular</button></a>

        </div>
        <div class="modal-popUp" id="myModal4">
        <div class="popup-images">
            <div class="swiper">
                <div class="swiper-wrapper" data-swiper-preload="false">
                  <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/VAGON2.jpg")}}" alt=""></div>
                  <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/tren8.jpg")}}" alt=""></div>
                  <div class="swiper-slide" data-swiper-autoplay="4000"><img src="{{asset("Images/tren9.jpg")}}" alt=""></div>
                  ...
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            </div>
        </div>

    </div>
    </div>

<br>
<br>
<br>
<br>

{{--  --}}
{{--  --}}

    <script>
     const bilet_id = {{ $bilet_id ?? 'null' }};
    let selectedSeats = []; // Locurile selectate din ambele vagoane
    let selectedSeats2 = [];
    let selectedSeats3 = [];
    let selectedSeats4 = [];


    const basePrice = parseFloat(document.getElementById("price1").innerText);
    const basePrice2 = parseFloat(document.getElementById("price2").innerText);
    const basePrice3 = parseFloat(document.getElementById("price3").innerText);
    const basePrice4 = parseFloat(document.getElementById("price4").innerText)
    const totalPriceElement = document.getElementById('total-price');
    const totalPriceVagon2 = document.getElementById("total-price-vagon2");
    const totalPriceVagon3 = document.getElementById("total-price-vagon3")
    const totalPriceVagon4 = document.getElementById("total-price-vagon4")


    function updateTotalPrice() {
       let totalPrice = basePrice * selectedSeats.length;
       let totalPrice2 = basePrice2 * selectedSeats2.length;
       let totalPrice3 = basePrice3 *selectedSeats3.length;
       let totalPrice4 = basePrice4 * selectedSeats4.length;
       totalPriceElement.innerText = totalPrice.toFixed(2) + " MDL";
       totalPriceVagon2.innerText = totalPrice2.toFixed(2) + " MDL";
       totalPriceVagon3.innerText = totalPrice3.toFixed(2) + " MDL";
       totalPriceVagon4.innerText = totalPrice4.toFixed(2) + " MDL";


    }





    // functia pentru selectare locuri vagonul 1
    function seatClickHandler(event, seatId) {
    const button = event.target;

    // Verificăm dacă au fost deja selectate locuri în alte vagoane
    if (selectedSeats2.length > 0 || selectedSeats4.length > 0 || selectedSeats3.length > 0) {
       alert("Nu puteți selecta locuri în alte vagoane când ați selectat deja locuri într-un alt vagon.");
       return;
    }

    if (button.classList.contains('seat-selected')) {
           button.classList.remove('seat-selected');
           button.style.backgroundColor = '';
           const index = selectedSeats.indexOf(seatId);
           selectedSeats.splice(index, 1);
       } else {
           if (selectedSeats.length >= 4) {
               alert("Nu puteți selecta mai mult de 4 locuri.");
               return;
           }
           selectedSeats.push(seatId);
           button.classList.add('seat-selected');
           button.style.backgroundColor = '#0844A8';
           button.classList.add('seat-disabled');
       }

       updateTotalPrice();
       console.log(selectedSeats);
    }

    // FUNCTIA 2 PENTRU SELECTARE VAGONUL 2


    function seatClickHandler2(event, seatId) {
    const button = event.target;
    if(selectedSeats3.length > 0 || selectedSeats4.length > 0 || selectedSeats.length > 0) {
    alert("Nu puteți selecta locuri în alte vagoane când ați selectat deja locuri într-un alt vagon.");
       return;
    }


    if (button.classList.contains('seat-selected')) {
       button.classList.remove('seat-selected');
       button.style.backgroundColor = '';
       const index = selectedSeats2.indexOf(seatId);
       selectedSeats2.splice(index, 1);
    } else {
       if (selectedSeats2.length >= 4) {
           alert("Nu puteți selecta mai mult de 4 locuri.");
           return;
       }
       selectedSeats2.push(seatId);
       button.classList.add('seat-selected');
       button.style.backgroundColor = '#0844A8';
       button.classList.add('seat-disabled');
    }

    updateTotalPrice();
    console.log(selectedSeats2);
    }

    // Vagonul  3

    function seatClickHandler3(event, seatId) {
    const button = event.target;
    if(selectedSeats.length > 0 || selectedSeats2.length > 0 || selectedSeats4.length > 0){
       alert("Nu puteți selecta locuri în alte vagoane când ați selectat deja locuri într-un alt vagon.");
       return;
    }

    if (button.classList.contains('seat-selected')) {
       button.classList.remove('seat-selected');
       button.style.backgroundColor = '';
       const index = selectedSeats3.indexOf(seatId);
       selectedSeats3.splice(index, 1);
    } else {
       if (selectedSeats3.length >= 4) {
           alert("Nu puteți selecta mai mult de 4 locuri.");
           return;
       }
       selectedSeats3.push(seatId);
       button.classList.add('seat-selected');
       button.style.backgroundColor = '#0844A8';
       button.classList.add('seat-disabled');
    }

    updateTotalPrice();
    console.log(selectedSeats3);
    }
    // Vagonul  4

    function seatClickHandler4(event, seatId) {
    const button = event.target;

    if(selectedSeats.length > 0 || selectedSeats2.length > 0 || selectedSeats3.length > 0){
       alert("Nu puteți selecta locuri în alte vagoane când ați selectat deja locuri într-un alt vagon.");
       return;
    }



    if (button.classList.contains('seat-selected')) {
       button.classList.remove('seat-selected');
       button.style.backgroundColor = '';
       const index = selectedSeats4.indexOf(seatId);
       selectedSeats4.splice(index, 1);
    } else {
       if (selectedSeats4.length >= 4) {
           alert("Nu puteți selecta mai mult de 4 locuri.");
           return;
       }
       selectedSeats4.push(seatId);
       button.classList.add('seat-selected');
       button.style.backgroundColor = '#0844A8';
       button.classList.add('seat-disabled');
    }

    updateTotalPrice();
    console.log(selectedSeats4);
    }

    function continueBooking() {

    if (selectedSeats.length === 0 && selectedSeats2.length === 0 && selectedSeats3.length === 0 && selectedSeats4.length === 0) {
    alert("Selectați cel puțin un loc pentru a continua.");
    return;
    }

    if (selectedSeats.length > 4) {
    alert("Nu puteți selecta mai mult de 4 locuri în vagonul 1.");
    return;
    }
    if (selectedSeats2.length > 4) {
    alert("Nu puteți selecta mai mult de 4 locuri în vagonul 2.");
    return;
    }
    if (selectedSeats3.length > 4) {
    alert("Nu puteți selecta mai mult de 4 locuri în vagonul 3.");
    return;
    }
    if (selectedSeats4.length > 4) {
    alert("Nu puteți selecta mai mult de 4 locuri în vagonul 4.");
    return;
    }



    // Calculăm numărul total de locuri selectate și prețul total pentru fiecare vagon
    let numSeats = selectedSeats.length;
    let numSeats2 = selectedSeats2.length;
    let numSeats3 = selectedSeats3.length;
    let numSeats4 = selectedSeats4.length;
    let totalPrice = basePrice * numSeats;
    let totalPrice2 = basePrice2 * numSeats2;
    let totalPrice3 = basePrice3 * numSeats3;
    let totalPrice4 = basePrice4 * numSeats4;
    // Obținem data selectată
    let selectedDate = document.getElementById('select-date-1').getAttribute('data-date');

    // Construim URL-ul formularului în funcție de vagonul și locurile selectate
    let url;
    if (numSeats > 0) {
       url = "{{ route('form', ['numSeets' => ':numSeats', 'selectedSeats' => ':selectedSeats', 'totalPrice' => ':totalPrice', 'selectedDate' => ':selectedDate', 'bilet_id' => ':bilet_id']) }}"
           .replace(':numSeats', numSeats)
           .replace(':selectedSeats', selectedSeats.join(','))
           .replace(':totalPrice', totalPrice.toFixed(2))
           .replace(':selectedDate', selectedDate)
           .replace(':bilet_id', bilet_id);
    } else if (numSeats2 > 0) {
       url = "{{ route('vagon', ['numSeets2' => ':numSeets2', 'selectedSeats2' => ':selectedSeats2', 'totalPrice2' => ':totalPrice2', 'selectedDate' => ':selectedDate', 'bilet_id' => ':bilet_id']) }}"
           .replace(':numSeets2', numSeats2)
           .replace(':selectedSeats2', selectedSeats2.join(','))
           .replace(':totalPrice2', totalPrice2.toFixed(2))
           .replace(':selectedDate', selectedDate)
           .replace(':bilet_id', bilet_id);

    } else if (numSeats3 > 0) {
       url = "{{ route('form3', ['numSeets3' => ':numSeats3', 'selectedSeats3' => ':selectedSeats3', 'totalPrice3' => ':totalPrice3', 'selectedDate' => ':selectedDate', 'bilet_id' => ':bilet_id']) }}"
           .replace(':numSeats3', numSeats3)
           .replace(':selectedSeats3', selectedSeats3.join(','))
           .replace(':totalPrice3', totalPrice3.toFixed(2))
           .replace(':selectedDate', selectedDate)
           .replace(':bilet_id', bilet_id);
    } else if (numSeats4 > 0) {
       url = "{{ route('form4', ['numSeets4' => ':numSeets4', 'selectedSeats4' => ':selectedSeats4', 'totalPrice4' => ':totalPrice4', 'selectedDate' => ':selectedDate', 'bilet_id' => ':bilet_id']) }}"
           .replace(':numSeets4', numSeats4)
           .replace(':selectedSeats4', selectedSeats4.join(','))
           .replace(':totalPrice4', totalPrice4.toFixed(2))
           .replace(':selectedDate', selectedDate)
           .replace(':bilet_id', bilet_id);
    }

    // Redirecționăm către URL-ul formularului
    window.location.href = url;
    }

    </script>

</body>
</html>

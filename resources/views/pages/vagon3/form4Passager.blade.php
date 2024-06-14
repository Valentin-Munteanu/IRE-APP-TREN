<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularul pentru 4 persoane în vagonul 3</title>
    <link rel="icon" href="{{asset("Logo/Logo Principal.png")}}">
    <link rel="stylesheet" href="{{asset("Scss/app.css")}}">

</head>
<body>
    <header class="biletes-header">
        <nav>
        <div class="img_reverse">
            <img src="{{asset("Images/trainBas.png")}}" alt="">
        </div>

        <div class="all-header">
        <a href="{{ route("home")}}"><div class="style-header">Anulează</div></a>
        </div>

        <div class="all-header3">
        <a><div class="style-header">Bilete</div></a>
        </div>


        <div class="all-header2">
        <a><div class="style-header">Date Pasageri</div></a>
        </div>
        <img src="{{asset("Images/trainBas.png")}}" alt="">

        </nav>

                    </header>


                    <div class="route-container">
                        <div class="train_number">
                            <div class="train_info">

                        <h3>Numarul trenului: {{$bilet->number_train}}</h3>
                        <h4>Ruta de tren: {{$bilet->route_name}}</h4>
                        <h3>Ora Pornirii: {{$bilet->time_start}} </h3>
                        <h3>Ora Destinatie: {{$bilet->time_destination}}</h3>
                        <p>Durata Calatoriei: {{$bilet->duration}}</p>
                            </div>
                        </div>
                </div>
                <div class="infor">

                <div class="login_div">
                    <h4>Vagonul:  {{$bilet->vagon_number3}} </h4>
                        <h4>Clasa: {{$bilet->class2c}}C</h4>

                        <div id="selected-date">
                            <h4>Data: {{$selectedDate}}</h4>
                        </div>
                        <p>Locul selectat: {{ $selectedSeats3 }}</p>
                        <p>Pret: {{$totalPrice3}} MDL</p>

                </div>
                   </div>


                   <div class="all-log">
                    <h4>Completează formularul pentru 4 persoane</h4>
                    <div class="login_form">
                        <div class="auth_form">


    <form action="{{ route('form3store', ['numSeets3' => $numseets3, 'bilet_id' => $bilet->id, "selectedDate" => $selectedDate, "selectedSeats3" => $selectedSeats3, "totalPrice3" => $totalPrice3]) }}" method="POST">
        @csrf
        <label for="">Pasager 1</label>
        <input type="text" name="person_name[]" placeholder="Numele">
        @error("person_name.0")
            <p>{{ $message }}</p>
        @enderror
        <input type="text" name="person_lastname[]" placeholder="Prenumele">
        @error("person_lastname.0")
            <p>{{ $message }}</p>
        @enderror
        <input type="email" name="email[]" placeholder="Email">
        @error("email.0")
            <p>{{ $message }}</p>
        @enderror

        <label for="">Pasager 2</label>
        <input type="text" name="person_name[]" placeholder="Numele persoanei a doua">
        @error("person_name.1")
            <p>{{ $message }}</p>
        @enderror
        <input type="text" name="person_lastname[]" placeholder="Prenumele persoanei a doua">
        @error("person_lastname.1")
            <p>{{ $message }}</p>
        @enderror
        <input type="email" name="email[]" placeholder="Email">
        @error("email.1")
            <p>{{ $message }}</p>
        @enderror

        <label for="">Pasager 3</label>
        <input type="text" name="person_name[]" placeholder="Numele persoanei a treia">
        @error("person_name.1")
            <p>{{ $message }}</p>
        @enderror
        <input type="text" name="person_lastname[]" placeholder="Prenumele persoanei a treia">
        @error("person_lastname.1")
            <p>{{ $message }}</p>
        @enderror
        <input type="email" name="email[]" placeholder="Email">
        @error("email.1")
            <p>{{ $message }}</p>
        @enderror


        <label for="">Pasager 4</label>
        <input type="text" name="person_name[]" placeholder="Numele persoanei a patra">
        @error("person_name.1")
            <p>{{ $message }}</p>
        @enderror
        <input type="text" name="person_lastname[]" placeholder="Prenumele persoanei a patra">
        @error("person_lastname.1")
            <p>{{ $message }}</p>
        @enderror
        <input type="email" name="email[]" placeholder="Email">
        @error("email.1")
            <p>{{ $message }}</p>
        @enderror


        <input type="hidden" name="selectedDate" value="{{ $selectedDate }}">
        <input type="hidden" name="totalPrice3" value="{{ $totalPrice3}}">

        <div class="button-send">
        <button>Trimite Formular</button>

    </div>
        </form>

    </div>
    </div>
    </div>

</body>
</html>
<div>

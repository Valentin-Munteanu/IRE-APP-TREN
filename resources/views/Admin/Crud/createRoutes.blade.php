@extends("Admin.Crud.layout")
@section("title", "Crud Biletes & routes")

@section("content")

<header class="header-Admin">
    <img src="{{asset("Images/DPK1.webp")}}" alt="">
    <nav>
    <a href="{{route('crud-Routes')}}">Creare rută</a>
<a href="{{route("admin-home")}}">Admin Home</a>
</nav>
</header>

<br>

<div class="create">
<h1>Crearea rutei de tren</h1>
</div>
<br>

<div class="Crud">

    <div class="formular">
        <h3>Crearea Rutelor de tren</h3>
        <div class="images">
       <img src="{{asset("Logo/Logo Principal.png")}}" alt="">
       <img src="https://myskillsconnect.com/uploads/posts/2023-06/1686349820_myskillsconnect-com-p-poezd-v-dvizhenii-foto-10.jpg" alt="">
    </div>

        <form action="{{ route('createBiletes') }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="text" name="train_number" placeholder="Numarul Trenului" required>
                @error("train_number")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="text" name="route" placeholder="Ruta Trenului" required>
                @error("route")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="text" name="station_start" placeholder="Statia de Pornire" required>
                @error("station_start")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="time" name="time_start" placeholder="Timpul Statia de pornire punctul A" required>


                <input type="text" name="destination" placeholder="Destinatia" required>
                @error("destination")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="time" name="time_destination" placeholder="Timpul destinatiei punctul B" required>

                <input type="text" name="duration" placeholder="Durata Calatoriei" required>
                @error("duration")
                <p class="errors">{{ $message }}</p>
            @enderror

            </div>

<br>
                <h3>Crearea formular Bilete</h3>
                <div class="form-group">

                <input type="text" name="number_train" placeholder="Numarul Trenului" required>
                @error("number_train")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="text" name="route_name" placeholder="Ruta de tren" required>
                @error("route_name")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="time" name="time_start" placeholder="Timpul Statia de pornire punctul A" required>


                <input type="time" name="time_destination" placeholder="Timpul destinatiei Punctul B" required>


                <input type="text" name="duration" placeholder="Durata Calatoriei" required>
                @error("duration")
                    <p class="errors">{{ $message }}</p>
                @enderror
                <label for="class1c"> Clasa 1
                  <input type="checkbox" name="class1c" value="1">
                    @error("class1c")
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </label>

                <label for="class2c"> Clasa 2
                 <input type="checkbox" name="class2c" value="2">
                    @error("class2c")
                        <p class="errors">{{ $message }}</p>
                    @enderror
                </label>

                <input type="text" name="price_class1" placeholder="Pretul clasa 1">
                <input type="text" name="price_class2" placeholder="Pretul clasa 2">

                <input type="number" name="vagon_number1" placeholder="Vagonul 1">
                @error("vagon_number1")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="number" name="vagon_number2" placeholder="Vagonul 2">
                @error("vagon_number2")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="number" name="vagon_number3" placeholder="Vagonul 3">
                @error("vagon_number3")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="number" name="vagon_number4" placeholder="Vagonul 4">
                @error("vagon_number4")
                    <p>{{ $message }}</p>
                @enderror
            </div>
<div class="button-send">
    <button>Trimite Date</button>

</div>
        </form>
    </div>
</div>
<br>

@endsection

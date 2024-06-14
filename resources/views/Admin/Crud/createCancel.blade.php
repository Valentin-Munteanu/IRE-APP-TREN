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
<h1>Anularea rutei de tren</h1>
</div>
<br>

<div class="Crud">

    <div class="formular">
        <h3>Anularea Rutelor de tren</h3>
        <div class="images">
       <img src="{{asset("Logo/Logo Principal.png")}}" alt="">
       <img src="https://myskillsconnect.com/uploads/posts/2023-06/1686349820_myskillsconnect-com-p-poezd-v-dvizhenii-foto-10.jpg" alt="">
    </div>

        <form action="{{ route('StoreCancel') }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="text" name="train_number" placeholder="Numarul Trenului" required>
                @error("train_number")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="text" name="route" placeholder="Ruta Trenului Anulata" required>
                @error("route")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="text" name="station_start" placeholder="Statia de Pornire punctul A" required>
                @error("station_start")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="time" name="time_start" placeholder="Timpul Statia de pornire punctul A" required>

                <input type="text" name="destination" placeholder="Destinatia punctul B" required>
                @error("destination")
                    <p class="errors">{{ $message }}</p>
                @enderror

                <input type="time" name="time_destination" placeholder="Timpul destinatiei punctul B" required>


            </div>

<div class="button-send">
    <button>Trimite Date</button>

</div>
        </form>
    </div>
</div>
<br>

@endsection

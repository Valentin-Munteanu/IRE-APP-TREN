@extends("Admin.Crud.layout")
@section("title", "Edit Cancel Biletes")

@section('content')
<header class="header-Admin">
    <img src="{{asset("Images/DPK1.webp")}}" alt="">
    <nav>
<a href="{{route("admin-home")}}">Admin Home</a>
<a href="{{route("Cancel-Train")}}">Anularea Trenuri</a>
<a href="{{ route("Cancel-delete", ['id' => $cancel->id]) }}">Ștergere rută</a>

</nav>
</header>
<br>
<div class="edit-routes">
    <h1>Actualizarea Rutelor Anulate de tren</h1>
</div>
<br>
<div class="Crud">
    <div class="formular">
        <h3>Actualizarea Rutelor Anulate de tren</h3>
        <div class="images">
            <img src="{{asset("Logo/Logo Principal.png")}}" alt="">
            <img src="https://freski-fotooboi.ru/images/catalog/1203861.jpg" alt="">
        </div>
        <form action="{{ route("update-store", ['id' => $cancel->id]) }}" method="POST">
            @csrf
            @method('PUT') <!-- Add this to specify the PUT method -->

            <div class="form-group">
                <label for="train_number">Numărul Trenului</label>
                <input type="text" name="train_number" placeholder="Numarul Trenului Anulat" value="{{$cancel->train_number}}" required>
                @error("train_number")
                    <p class="errors">{{ $message }}</p>
                @enderror
<label for="route">Ruta Trenului</label>
                <input type="text" name="route" placeholder="Ruta Trenului" required value="{{$cancel->route}}">
                @error("route")
                    <p class="errors">{{ $message }}</p>
                @enderror
<label for="station_start">De la</label>
                <input type="text" name="station_start" placeholder="Statia de Pornire punctul A" required value="{{$cancel->station_start}}">
                @error("station_start")
                    <p class="errors">{{ $message }}</p>
                @enderror
<label for="time_start">Ora de Plecare</label>
                <input type="time" name="time_start" placeholder="Timpul Statia de pornire punctul A" required value="{{$cancel->time_start}}">

<label for="destination">Până la</label>
                <input type="text" name="destination" placeholder="Destinatia punctul B" required value="{{$cancel->destination}}">
                @error("destination")
                    <p class="errors">{{ $message }}</p>
                @enderror
<label for="time_destination">Ora sosirii</label>
                <input type="time" name="time_destination" placeholder="Timpul destinatiei punctul B" required value="{{$cancel->time_destination}}">

                <input type="hidden" name="hidden" value="0">
                <input type="checkbox" name="hidden" value="1">
                <label for="hidden">Ascundere</label>

            </div>
<div class="button-send">
    <button>Trimite Date</button>

</div>
        </form>
    </div>
</div>
<br>

@endsection

@extends("Admin.Crud.layout")
@section("title", "Edit Biletes & routes")

@section('content')
    <header class="header-Admin">
        <img src="{{asset("Images/DPK1.webp")}}" alt="">
        <nav>
            <a href="{{route("admin-home")}}">Admin Home</a>
            <a href="{{ route('crud-Routes')}}">Creare rută</a>
            <a href="{{ route('edit-Biletes', ['id' => $id]) }}">Actualizare rută</a>
            <a href="{{ route('route-delete', ['id' => $id]) }}">Ștergere rută</a>
        </nav>
    </header>
    <br>
    <div class="edit-routes">
        <h1>Actualizare Rută</h1>
    </div>
    <br>
    <div class="Crud">
        <div class="formular">
            <h3>Actualizarea Rutelor de tren</h3>
            <div class="images">
                <img src="{{asset("Logo/Logo Principal.png")}}" alt="">
                <img src="https://freski-fotooboi.ru/images/catalog/1203861.jpg" alt="">
            </div>
            <form action="{{ route('update-Biletes', ['id' => $biletes->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="train_number">Numărul Trenului</label>
                    <input type="text" name="train_number" placeholder="Numărul Trenului" value="{{$route->train_number}}" required>
                    @error("train_number")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="route">Ruta Trenului</label>
                    <input type="text" name="route" placeholder="Ruta Trenului" required value="{{$route->route}}">
                    @error("route")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="station_start">De la</label>
                    <input type="text" name="station_start" placeholder="Stația de Pornire punctul A" required value="{{$route->station_start}}">
                    @error("station_start")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="time_start">Ora de Plecare</label>
                    <input type="time" name="time_start" placeholder="Timpul Stația de pornire punctul A" required value="{{$route->time_start}}">

                    <label for="destination">Până la</label>
                    <input type="text" name="destination" placeholder="Destinația punctul B" required value="{{$route->destination}}">
                    @error("destination")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="time_destination">Ora Sosirii</label>
                    <input type="time" name="time_destination" placeholder="Timpul destinației punctul B" required value="{{$route->time_destination}}">

                    <label for="duration">Durata Călătoriei</label>
                    <input type="text" name="duration" placeholder="Durata Călătoriei" required value="{{$route->duration}}">
                </div>

                <hr>
                <br>

                <h3>Actualizarea Biletelor</h3>
                <div class="form-group">
                    <label for="number_train">Numărul Trenului</label>
                    <input type="text" name="number_train" placeholder="Numărul Trenului" required value="{{$biletes->number_train}}">
                    @error("number_train")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="route_name">Ruta Trenului</label>
                    <input type="text" name="route_name" placeholder="Ruta de tren" required value="{{$biletes->route_name}}">
                    @error("route_name")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="time_start_biletes">Ora de Plecare</label>
                    <input type="time" name="time_start_biletes" placeholder="Timpul Stația de pornire punctul A" required value="{{$biletes->time_start_biletes}}">

                    <label for="time_destination_biletes">Ora Sosirii</label>
                    <input type="time" name="time_destination_biletes" placeholder="Timpul destinației punctul B" required value="{{$biletes->time_destination_biletes}}">

                    <label for="duration_biletes">Durata Călătoriei</label>
                    <input type="text" name="duration_biletes" placeholder="Durata Călătoriei" required value="{{$biletes->duration_biletes}}">
                    @error("duration_biletes")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="class1c">Clasa 1
                        <input type="checkbox" name="class1c" value="1" @if ($biletes->class1c) checked @endif>
                    </label>
                    @error("class1c")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="class2c">Clasa 2
                        <input type="checkbox" name="class2c" value="1" @if ($biletes->class2c) checked @endif>
                    </label>
                    @error("class2c")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="price_class1">Prețul pentru clasa 1</label>
                    <input type="text" name="price_class1" placeholder="Prețul pentru clasa 1" value="{{$biletes->price_class1}}">
                    @error("price_class1")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="price_class2">Prețul pentru clasa 2</label>
                    <input type="text" name="price_class2" placeholder="Prețul pentru clasa 2" value="{{$biletes->price_class2}}">
                    @error("price_class2")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="vagon_number1">Numărul vagonului 1</label>
                    <input type="number" name="vagon_number1" placeholder="Vagonul 1" value="{{$biletes->vagon_number1}}">
                    @error("vagon_number1")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="vagon_number2">Numărul vagonului 2</label>
                    <input type="number" name="vagon_number2" placeholder="Vagonul 2" value="{{$biletes->vagon_number2}}">
                    @error("vagon_number2")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="vagon_number3">Numărul vagonului 3</label>
                    <input type="number" name="vagon_number3" placeholder="Vagonul 3" value="{{$biletes->vagon_number3}}">
                    @error("vagon_number3")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <label for="vagon_number4">Numărul vagonului 4</label>
                    <input type="number" name="vagon_number4" placeholder="Vagonul 4" value="{{$biletes->vagon_number4}}">
                    @error("vagon_number4")
                    <p class="errors">{{ $message }}</p>
                    @enderror

                    <input type="hidden" name="hidden" value="0">
                    <input type="checkbox" name="hidden" value="1" {{ $biletes->hidden ? 'checked' : '' }}>
                    <label for="hidden">Ascundere</label>
                </div>

                <div class="button-send">
                    <button type="submit">Trimite Date</button>
                </div>
            </form>
        </div>
    </div>
    <br>
@endsection







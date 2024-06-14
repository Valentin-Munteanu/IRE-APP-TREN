@extends("Admin.Crud.layout")
@section("title", "Stergere Routes & Biletes")

@section("content")
<header class="header-Admin">
    <img src="{{asset("Images/DPK1.webp")}}" alt="">

    <nav>
    <a href="{{ route('crud-Routes')}}">Creare rută</a>
<a href="{{route("admin-home")}}">Admin Home</a>
    <a href="{{ route('edit-Biletes', ['id' => $id]) }}">Actualizare rută</a>
    <a href="{{ route('route-delete', ['id' => $id]) }}">Ștergere rută</a>
</nav>
</header>
<br>
<div class="delete-route">
    <h1>Ștergere Rută de tren</h1>
</div>
<br>
<div class="formular-delete">
<form action="{{route('routes-destroy', $biletes->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <h2>Sunteți sigur ca doriți să ștergeți această rută de tren ?</h2>
    <h3>Numărul trenului: {{$biletes->number_train}}</h3>
    <p>Ruta trenului: {{$routes->route}}</p>
    <div class="button-send">
    <button>Șterge</button>

    </div>
</div>

</form>

@endsection

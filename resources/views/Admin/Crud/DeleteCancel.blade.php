@extends("Admin.Crud.layout")
@section("title", "Stergere Routes & Biletes")

@section("content")

<header class="header-Admin">
    <img src="{{asset("Images/DPK1.webp")}}" alt="">

    <nav>
    <a href="{{ route("Update", ['id' => $cancel->id]) }}">Actualizare rută</a>
    <a href="{{ route('crud-Routes')}}">Creare rută</a>
<a href="{{route("admin-home")}}">Admin Home</a>
</nav>
</header>
<br>
<div class="delete-route">
    <h1>Ștergere Rută de tren</h1>
</div>
<br>
<div class="formular-delete">
<form action="{{route("cancelDestroy", $cancel->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <h2>Sunteți sigur ca doriți să ștergeți această rută de tren ?</h2>
    <h3>Numărul trenului: {{$cancel->number_train}}</h3>
    <p>Ruta trenului: {{$cancel->route}}</p>
    <div class="button-send">
    <button>Șterge</button>

    </div>
</div>

</form>

@endsection

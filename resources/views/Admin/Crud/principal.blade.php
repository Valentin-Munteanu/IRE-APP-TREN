@extends("Admin.Crud.layout")

@section("title", "Admin Home")

@section("content")

<header class="header-Admin">
<img src="{{asset("Images/Tren5.jpg")}}" alt="">
    <nav>
<a href="{{route("Cancel-Train")}}">Anularea Trenuri</a>
<a href="{{route("admin-home")}}">Admin Home</a>
    <a href="{{ route('crud-Routes')}}">Creare rută</a>

</nav>
</header>
<br>


<div class="admin-home">
<img src="{{asset("Logo/Logo Principal.png")}}" alt="">

<h2>Administration WEBSITE</h2>
</div>
<br>
<br>
<div class="pages-home">
    <div class="admin_oferte">
    <h2>Operator Rapid și Sigur</h2>
</div>

<br>

<div class="admin_information">
    <h2>Călatorii și servicii de înaltă calitate</h2>
</div>
</div>


@endsection


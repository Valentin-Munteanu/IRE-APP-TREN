@extends("Admin.Crud.layout")

@section("title", "Admin")

@section("content")
<div class="admin_dashboard">
    <h2>Pagina Administratorului</h2>
</div>
<br>
<div class="admin_info">
    <h3>Bine ați venit </h3>
    <p>{{$admin->login}} <i class="fa-solid fa-user-tie"></i> </p>
    <div class="button-send">
        <a href="{{route("logout")}}"><button>Ieși din cont</button></a>
    </div>
</div>
<br>
@endsection


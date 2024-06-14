@extends("Admin.Crud.layout")

@section("title", "Login Admin")

@section("content")
<div class="register_login">
    <h2>Autentificare Admin</h2>
</div>
<br>
<div class="login_form">
<div class="auth_login">
    <form action="{{route("Admin-login")}}" method="POST">
@csrf
<input type="text" name="login" placeholder="Admin login">
@error("login")
    <p class="errors">{{$message}}</p>
@enderror
<div class="password-container">
    <input type="password" name="password" id="password" placeholder="Parola">
    <span class="toggle-password" onclick="passwordVisible(this)"><i class="fas fa-eye-slash"></i></span>
</div>

@error("password")
    <p class="errors">{{$message}}</p>
@enderror

<div class="button-send">
    <button type="submit">Autentificare</button>

</div>
</form>
</div>
</div>

<script src="{{asset("JS/visiblePassword.js")}}"></script>

@endsection

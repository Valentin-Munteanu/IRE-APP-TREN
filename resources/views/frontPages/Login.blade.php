@extends("layout")

@section("title", "Autentificare")

@section("content")
<div class="register_login">
    <h2>Autentificare</h2>
<div class="login_form">
<div class="auth_login">
    <form action="{{route("User-login")}}" method="POST">
@csrf
<input type="text" name="login" placeholder="Login" value="{{ old('login', $lastLogin) }}" >
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

          <h4>Nu ieși din cont </h4>
          <input type="checkbox" name="remember" id="remember" >
<div class="button-send">
    <button type="submit">Autentificare</button>

</div>
</form>
</div>
</div>
</div>

<script src="{{asset("JS/visiblePassword.js")}}"></script>

@endsection

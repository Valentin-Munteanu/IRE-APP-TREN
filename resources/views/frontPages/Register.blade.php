@extends("layout")

@section("title", "Contul Meu/Înregistrare")

@section("content")
<div class="register_form">

    <div class="auth_user">
        <form action="{{route("Reg-register")}}" method="POST">
    @csrf
    <input type="text" name="login" placeholder="Login">
    @error("login")
    <p class="errors">{{$message}}</p>
    @enderror
    <input type="text" name="name"  placeholder="Numele">
    @error("name")
    <p class="errors">{{$message}}</p>
    @enderror

    <input type="text" name="email"  placeholder="Email">
    @error("email")
    <p class="errors">{{$message}}</p>
    @enderror


    <input type="text" name="lastname" placeholder="Prenumele">
    @error("lastname")
    <p class="errors">{{$message}}</p>
    @enderror
    <div class="password-container2">
    <input type="password" name="password" id="password" placeholder="Parola">
    <span class="toggle-password" onclick="passwordVisible(this)"><i class="fas fa-eye-slash"></i></span>

    </div>
    @error("password")
    <p class="errors">{{$message}}</p>
    @enderror

    <div class="password-container2">
    <input type="password" name="password_confirmation" id="password_confirm" placeholder="Confirmă parola">
    <span class="toggle-password" onclick="passwordConfirmVisible(this)"><i class="fas fa-eye-slash"></i></span>
    </div>
    @error("password_confirmation")
    <p class="errors">{{$message}}</p>
    @enderror
    <div class="button-send">
        <button>Înregistreazăte</button>

    </div>

        </form>


    <div class="login_div">
        <h3>Ai deja un cont ?</h3>
        <p>Accesează pagina de: </p>
    <a href="{{route("Login")}}">Autentificare</a>
    </div>
    </div>

    </div>

    <script src="{{asset("JS/visiblePassword.js")}}"></script>

@endsection

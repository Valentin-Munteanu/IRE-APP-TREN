@extends("layout")

@section("title", "Pagina Utilizatorului")

@section("content")

<div class="user-dashbord">
    <h2>Pagina Personală</h2>
<div class="user_info">
        <h3>Bine ați venit</h3>
        <h3>{{ $user->login }}<h3>
            <i class="fa-solid fa-user"></i>
        <div class="button-send">
            <a href="{{ route('logout-register') }}"><button>Ieși din cont</button></a>
        </div>
</div>
</div>
<br>
<br>

        <div class="login_form">
            <div class="auth_login">

            <h3>Modifică Contul</h3>
                <form action="{{ route('user.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-group">
                        <input type="text" name="login" value="{{ old('login', $user->login) }}" required>
                        @error('login')
                            <p class="errors">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="password-container">
                        <input type="password" name="password" id="password" placeholder="Parola Nouă">
                        <span class="toggle-password" onclick="passwordVisible(this)"><i class="fas fa-eye-slash"></i></span>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmare Parola">
                    </div>
                    @error('password')
                        <p class="errors">{{ $message }}</p>
                    @enderror
                    <div class="button-send">
                        <button type="submit">Modifică</button>
                    </div>
                </form>
                <div class="delete_account">
                    <h3>Ștergere cont</h3>
                    <form action="{{ route('user.delete') }}" method="POST" onsubmit="return confirm('Sigur doriți să ștergeți contul?');">
                        @csrf
                        @method('DELETE')
                        <div class="button-send">
                            <button type="submit" id="delete-user">Șterge contul</button>
                        </div>
                    </form>
                </div>
        </div>


            </div>
        </div>



<script src="{{ asset('JS/visiblePassword.js') }}"></script>
@endsection

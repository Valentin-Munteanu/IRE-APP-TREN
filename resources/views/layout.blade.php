<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "My App")</title>
    <link rel="stylesheet" href="{{asset("Scss/styles.css")}}">
    <link rel="icon" href="{{asset("Logo/Logo Principal.png")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="{{asset("Scss/animate.css")}}">
<script src="{{asset("JS/wow.min.js")}}"></script>
<script>
new WOW().init();
</script>

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

</head>
<body>

    <ul class='navbar'>
        <div class='images'>
            <a href="{{ route('home') }}"><img src="{{asset("Logo/Logo Principal.png")}}" alt=""></a>

            </div>
            <nav>
          <header>
            <input type="checkbox" id="check" class="checkbox" />
            <label for="check" class="open">
                <i class="fa-solid fa-bars"></i>
            </label>
            <span class='element'>
              <a href="{{route("Abonamente")}}"><li>Abonamente de călătorie</li></a>
              <a href="{{route("Intrebari")}}"><li>Întrebări frecvente</li></a>
              <a href="{{route("Oferte")}}"><li>Oferte de Călătorie</li></a>
              <a href="{{route("Destinatii")}}"><li>Destinații turistice</li></a>
              <a href="{{route("Mersul-Trenului")}}"><li>Mersul trenurilor</li></a>
              <a href="{{route("Trenuri-Anulate")}}"><li>Trenuri Anulate</li></a>
                @if(auth("web")->check())
              <a href="{{route("user.dashboard")}}"><li><i id="user" class="fa-solid fa-user"></i></li></a>
@else
<a href="{{route("Register")}}"><li>Contul Meu</li></a>
@endif
              <label for="check" class='close'>
                <i id="closer" class="fa-solid fa-xmark"></i>
              </label>
            </span>
          </header>
        </nav>
      </ul>
<br>
    <main>
        @yield('content')
    </main>
    <div class="background">
        <footer class="footer">
            <img src="{{ asset('Images/tren5.jpg') }}" alt="Tren">
            <div class="links">
                <a href="{{route("Despre")}}"><li>Despre Noi</li></a>
                @if (auth("admins"))
                <a href="{{route("admin-home")}}"><li class="admin_href">Admin</li></a>
              @else
              <a href="{{ route('admin-registerGET') }}">Contul Administrator</a>
                @endif
                <a href="{{route("Contacte")}}"><li>Contacte</li></a>
            </div>
            <img src="{{ asset('Logo/Logo Principal.png') }}" alt="Logo Principal">
        </footer>
    </div>

</body>
</html>

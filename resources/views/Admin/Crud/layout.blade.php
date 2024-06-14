<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "My App")</title>
    <link rel="stylesheet" href="{{ asset('Scss/admin.css') }}">
    <link rel="icon" href="{{ asset('Logo/Logo Principal.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
    <header class="header-Admin2">
        <nav>
           <a href="{{ route('admin-home') }}"><img src="{{ asset('Logo/Logo Principal.png') }}" alt=""></a>
            @if (auth('admins')->check())
                <a href="{{ route('admin.dashboard') }}"><i id="admin" class="fa-solid fa-user-tie"></i></a>
            @else
                <a href="{{ route('admin-registerGET') }}">Contul Administrator</a>
            @endif
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
    </footer>
</body>
</html>

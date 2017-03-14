<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Styles -->

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="/css/master.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navigation-default">
            <div class="container">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/homepage') }}">
                        <img class="logo" src="/img/logo-nav.svg" alt="">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <div class="nav-right navigation-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <a class="menu" href="{{ url('/kelola_data_wisuda') }}">Tentang SISWA</a>
                            <a class="menu" href="{{ url('/informasi_wisuda') }}">Informasi Wisuda</a>
                            <a class="btn-green" href="{{ route('login') }}">Login</a>
                            {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                        @else
                            <a class="menu" href="{{ url('/menu') }}">Menu</a>
                            <a class="menu" href="{{ url('/home') }}">Kelola Data</a>
                            <a class="menu" href="{{ url('alumni_tracers') }}">Alumni Tracer</a>
                            <div class="dropdown menu menus">

                                <a style="color:#0fd121;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <footer class="container-fluid">
      <div class="row footer-box">
        <div class="col-md-6">
          <img class="logo-footer" src="/img/logo-footer.svg" alt="">
        </div>
        <div class="col-md-6">
          <p>
          &copy Sistem Informasi Wisudawan. All Right Reserved 2017
          </p>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

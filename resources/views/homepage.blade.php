<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SISWA</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">

        <!-- Styles Collection -->
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

        <header class="lr-padding container-fluid">
          <div class="navigation">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/menu') }}">Menu</a>
                        <a href="{{ url('/dashboard') }}">Kelola Data</a>
                        <a href="{{ url('alumni_tracers') }}">Alumni Tracer</a>
                        <a style="color:#0fd121;" href="{{ url('/menu') }}">{{ Auth::user()->name }}</a>
                    @else
                      <a href="{{ url('/kelola_data_wisuda') }}">Tentang SISWA</a>
                        <a href="{{ url('/informasi_wisuda') }}">Informasi Wisuda</a>
                        <a class="btn-green" href="{{ url('/login') }}">Login</a>
                        {{-- <a href="{{ url('/register') }}">Register</a> --}}
                    @endif
                </div>
            @endif
          </div> <!-- navigation -->

          <div class="header-box">
            <img class="logo-header" src="/img/logo-header.svg" alt="">
            <h2 class="title-header">Sistem Informasi Wisudawan<br>Universitas Diponegoro</h2>
            <p class="header-subtitle">
              Website aplikasi yang dibuat untuk memberikan fasilitas kepada wisudawan Universitas Diponegoro
            </p>
          </div>

          <div class="container header-bottom">
            <div class="row">
              <div class="col-md-6">
                <p class="hb-title">Temukan kemudahan sebagai wisudawan</p>
              </div>
              <div class="col-md-6">
                <a class="btn-coba" href="{{ url('/login') }}">Coba Sekarang</a>
              </div>
            </div>
          </div>

        </header>

        <div class="container-fluid">

          <div class="row section service-box">
            <div class="col-md-6">
              <img class="img-box" src="/img/icon-1.png" alt="">
            </div>
            <div class="col-md-6">
              <div class="service-content">
                <h2 class="title-content">Mengelola Data Wisudawan</h2>
                <p class="content">
                  Kami memberikan kemudahan untuk mengelola setiap data identitas, pendidikan dan pekerjaan
                  wisudawan. Dengan menggunakan fitur ini wisudawan dapat dengan mudah mengalola
                  data wisuda dengan mudah
                </p>
                <a href="{{ url('/kelola_data_wisuda') }}">
                  <span class="btn-green-control">LIHAT</span>
                  <span class="btn-group"><i class="fa fa-chevron-right"></i></span>
                </a>
              </div>
            </div>
          </div> <!-- Secion One -->

          <div class="row section service-box-middle">
            <div class="col-md-6">
              <div class="service-content">
                <h2 class="title-content">Alumni Tracer</h2>
                <p class="content">
                  Fitur yang tidak kalah penting adalah fitur yang dapat digunakan
                  untuk mencari para alumni Universitas Diponegoro. Pencarian alumni ini bertujuan
                  untuk meningkatkan daya saing wisudawan Universitas Diponegoro
                </p>
                <a href="{{ url('/alumni_tracer') }}">
                  <span class="btn-green-control">LIHAT</span>
                  <span class="btn-group"><i class="fa fa-chevron-right"></i></span>
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <img class="img-box-2" src="/img/icon-2.png" alt="">
            </div>
          </div> <!-- Section Two -->

          <div class="row section service-box">
            <div class="col-md-6">
              <img class="img-box" src="/img/icon-3.png" alt="">
            </div>
            <div class="col-md-6">
              <div class="service-content">
                <h2 class="title-content">Informasi Wisuda</h2>
                <p class="content">
                  Dalam webiste juga menyediakan informasi mengenai wisuda Universitas Diponegoro.
                  Segala hal kami sediakan bagi wisudawan agar tetap selalu mendapatkan informasi
                  terupdate mengenai proses wisuda
                </p>
                <a href="{{ url('/informasi_wisuda') }}">
                  <span class="btn-green-control">LIHAT</span>
                  <span class="btn-group"><i class="fa fa-chevron-right"></i></span>
                </a>
              </div>
            </div>
          </div> <!-- Secion Three -->

          <div class="row">
            <div class="ledgar">
              <img class="small-icon" src="/img/logo-icon.svg" alt="">
              <h2 class="quote">
              Saat hati ingin mundur,<br>
              hanya komitmen yang tersisa
              </h2>
            </div>
          </div>

        </div> <!-- Container Fluid -->

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

    </body>
</html>

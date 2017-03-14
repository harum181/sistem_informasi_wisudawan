@extends('layouts.app')

@section('title')
    <title>Menu</title>
@endsection

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h1 class="semi-title text-center mug">Sistem Informasi Wisudawan</h1>
        </div>

        <div class="saint menu-control">
          <div class="col-md-4">
            <div class="service-menu-1 text-center">
              <img src="/img/icon-data.png" alt="">
              <h2 class="title-control">Data Wisudawan</h2>
              <p class="menu-content">Update data pribadi wisudawan dengan mudah</p>
              <a class="btn-white" href="{{ url('/home') }}">Lihat</a>
            </div>
          </div>

          <div class="col-md-5">
            <div class="service-menu-2 text-center">
              <img style="margin-bottom:7px" src="/img/icon-tracer.png" alt="">
              <h2 class="title-control">Alumni Tracers</h2>
              <p class="menu-content">Cari tahu bagaimana persebaran alumni</p>
              <a class="btn-white" href="{{ url('/alumni_tracers') }}">Lihat</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-menu-3 text-center">
              <img style="margin-bottom:24px" src="/img/icon-info.png" alt="">
              <h2 class="title-control">Informasi Wisuda</h2>
              <p class="menu-content">Temukan informasi seputar wisuda</p>
              <a class="btn-white" href="{{ url('/informasi_wisuda') }}">Lihat</a>
            </div>
          </div>

        </div>
      </div>
    </div>

@endsection

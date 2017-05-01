@extends('layouts.app')

@section('title')
  <title>404</title>
@endsection

<style media="screen">
    .ngix{
      margin-top: 50px;
      font-size: 30px;
    }
    .ngox{
      margin-top: 0px;
      font-size: 15px;
      color: #aaaaaa;
    }
    .pung{
      margin: 70px 0;
      margin-left: 80px;
    }
    .bugh{
      margin: 210px 0;
      margin-left: 100px;
    }
</style>

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <img class="pung" src="../img/tre.jpg" alt="">
    </div>
    <div class="col-md-6">
      <div class="bugh">
        <p class="ngix">Halaman Kosong</p>
        <p class="ngox">Sepertinya halaman yang anda maksud tidak ada</p>
      </div>
    </div>
  </div>
</div>
@endsection

@extends('layouts.app')

@section('title')
    <title>Alumni Tracer</title>
@endsection

@section('content')

    <div class="container ledgar">
      <div class="row text-center">
        <h1 class="title-alumni-tracers">Alumni Tracers</h1>
        <form class="alumni-control" action="index.html" method="post">
          <input class="form-search-alumni" type="text" name="" value="">
          <button class="btn-alumni" type="submit" name="button"><i class="fa fa-search fa-margin"></i>Cari Alumni</button>
        </form>
        <p class="detail-tracer">Fitur yang dapat digunakan untuk mencari para alumni Universitas Diponegoro. Pencarian alumni ini bertujuan untuk meningkatkan daya saing wisudawan Universitas Diponegoro</p>
      </div>
    </div>

    <div class="container">
      <div class="row text-center">
        <form class="filter-alumni" action="index.html" method="post">
          <select value="" class="forms-fakultas">
            <option disabled="disable" selected="active">Fakultas</option>
            <option value="">Sains dan Matematika</option>
            <option value="">Teknik</option>
            <option value="">Hukum</option>
            <option value="">Kesehatan Masyarakat</option>
            <option value="">Psikologi</option>
            <option value="">Perikanan dan kelautan</option>
            <option value="">Kelautan dan Ilmu Pelayaran</option>
            <option value="">Peternakan</option>
            <option value="">Kedokteran</option>
            <option value="">Ilmu Sosial dan Politik</option>
            <option value="">Ilmu Budaya</option>
          </select>
          {{-- <input type="text" name="" value="Program studi"> --}}
          <select class="forms-bidang-pekerjaan" name="">
            <option value="" disabled="disable" selected="active">Bidang Pekerjaan</option>
            <option value="">Pendidikan</option>
            <option value="">PNS</option>
            <option value="">Arsitektur</option>
            <option value="">IT</option>
          </select>
          <select class="forms-lokasi-pekerjaan" name="">
            <option disabled="disable" selected="active" value="">Lokasi Pekerjaan</option>
            <option value="">Jawa Tengah</option>
            <option value="">Jawa Timur</option>
            <option value="">Jawa Barat</option>
            <option value="">Jakarta</option>
            <option value="">Bali</option>
            <option value="">Kalimantan</option>
            <option value="">Sulawesi</option>
          </select>
          <button class="btn-cari" type="submit" name="button">Cari</button>
        </form>
      </div>

      <div class="row">
        <div class="display-box">
          <div class="col-md-2 col-md-offset-2">
            <img class="profil-cari" src="http://placehold.it/120x150">
          </div>
          <div class="col-md-4">
            <h3>Hariel Lukman</h3>
            <p>Fakultas : Sains dan Matematika</p>
            <p>Departemen : Kimia</p>
            <p>Bidang pekerjaan : Game Developer</p>
            <p>Lokasi : Jakarta</p>
          </div>
        </div>
        <hr class="col-md-12 migrate">
      </div>

      <div class="row">
        <div class="display-box">
          <div class="col-md-2 col-md-offset-2">
            <img class="profil-cari" src="http://placehold.it/120x150">
          </div>
          <div class="col-md-4">
            <h3>Hariel Lukman</h3>
            <p>Fakultas : Sains dan Matematika</p>
            <p>Departemen : Kimia</p>
            <p>Bidang pekerjaan : Game Developer</p>
            <p>Lokasi : Jakarta</p>
          </div>
        </div>
        <hr class="col-md-12 migrate">
      </div>

      <div class="row">
        <div class="display-box">
          <div class="col-md-2 col-md-offset-2">
            <img class="profil-cari" src="http://placehold.it/120x150">
          </div>
          <div class="col-md-4">
            <h3>Hariel Lukman</h3>
            <p>Fakultas : Sains dan Matematika</p>
            <p>Departemen : Kimia</p>
            <p>Bidang pekerjaan : Game Developer</p>
            <p>Lokasi : Jakarta</p>
          </div>
        </div>
        <hr class="col-md-12 migrate">
      </div>

      <div class="row">
        <div class="display-box">
          <div class="col-md-2 col-md-offset-2">
            <img class="profil-cari" src="http://placehold.it/120x150">
          </div>
          <div class="col-md-4">
            <h3>Hariel Lukman</h3>
            <p>Fakultas : Sains dan Matematika</p>
            <p>Departemen : Kimia</p>
            <p>Bidang pekerjaan : Game Developer</p>
            <p>Lokasi : Jakarta</p>
          </div>
        </div>
        <hr class="col-md-12 migrate">
      </div>

      <div class="row">
        <div class="display-box">
          <div class="col-md-2 col-md-offset-2">
            <img class="profil-cari" src="http://placehold.it/120x150">
          </div>
          <div class="col-md-4">
            <h3>Hariel Lukman</h3>
            <p>Fakultas : Sains dan Matematika</p>
            <p>Departemen : Kimia</p>
            <p>Bidang pekerjaan : Game Developer</p>
            <p>Lokasi : Jakarta</p>
          </div>
        </div>
        <hr class="col-md-12 migrate">
      </div>

      <div class="row">
        <div class="display-box">
          <div class="col-md-2 col-md-offset-2">
            <img class="profil-cari" src="http://placehold.it/120x150">
          </div>
          <div class="col-md-4">
            <h3>Hariel Lukman</h3>
            <p>Fakultas : Sains dan Matematika</p>
            <p>Departemen : Kimia</p>
            <p>Bidang pekerjaan : Game Developer</p>
            <p>Lokasi : Jakarta</p>
          </div>
        </div>
        <hr class="col-md-12 migrate">
      </div>

    </div>

@endsection

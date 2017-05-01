@extends('layouts.app')

@section('title')
    <title>Data Pribadi</title>
@endsection

@section('content')
<div style="background-color:rgb(237, 237, 237);" class="container-fluid">
    <div class="row">
      <h1 class="header-profil">Kelola Identitas Pribadi</h1>
      {{-- Panel Informasi Umum --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Identitas Pribadi</h2>
          {{-- {{ Session::get('message') }} --}}
        </div>
        <div class="profil-panel-body">
          <div class="identitas-pribadi-box">

            {{-- Detail Info Umum --}}
            <img class="image-profils" src="http://placehold.it/120x150" alt="">
            <table class="info-contents">
              <tr>
                <td>Nama Lengkap</td><td class="con">{{ Auth::user()->name }}</td>
              </tr>
              <tr>
                <td>NIM</td><td class="con">24010314120061</td>
              </tr>
              <tr>
                <td>Departemen</td><td class="con">Ilmu Komputer</td>
              </tr>
              <tr>
                <td>Fakultas</td><td class="con">Sains dan Matematika</td>
              </tr>
              <tr>
                <td>Status</td><td class="con">Belum Diverifikasi</td>
              </tr>
            </table>

            {{-- Link Collection --}}
            <div class="btn-groups">
              <a class="button-green" href="{{ url('/info') }}">Identitas Pribadi</a>
              <a class="button-dark-blue" href="{{ url('/pekerjaan') }}">Pendidikan</a>
              <a class="button-baby-blue" href="{{ url('/pekerjaan') }}">Pekerjaan</a>
            </div>
          </div>
        </div>

      </div>

      {{-- Panel informasi perkuliahan --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Informasi Perkulihan</h2>
        </div>
        <div class="profil-panel-body">
          <div class="identitas-pribadi-box">

            {{-- Detail info perkuliahan --}}
            @if (Auth::user()->detail)
            <table class="info-contents">
              <tr>
                <td>IPK</td><td class="con">
                      {{ Auth::user()->detail->ipk }}
                </td>
                <td class="fux">Tahun Masuk</td><td class="fuxt">
                      {{ Auth::user()->detail->tgl_masuk }}
                </td>
              </tr>
              <tr>
                <td>Predikat</td><td class="con">
                      {{ Auth::user()->detail->predikat }}
                </td>
                <td class="fux">Tahun Lulus</td><td class="fuxt">
                      {{ Auth::user()->detail->tgl_lulus }}
                </td>
              </tr>
              <tr>
                <td>Lama Studi</td><td class="con">
                      {{ Auth::user()->detail->lama_studi }}
                  </td>
                <td class="fux">Cuti</td><td class="fuxt">
                      {{ Auth::user()->detail->status_cuti }}
                </td>
              </tr>
            </table>
            @else

            @endif
            <div class="footer-panel">
              <p class="ignore">
                @if (Auth::user()->detail)
                    Data yang telah diverifikasi tidak dapat dirubah lagi
                @else
                    <span class="notif-update"><i class="fa fa-info-circle seth"></i>Perbarui informasi perkuliahan</span>
                @endif
              </p>
              @if (Auth::user()->detail)
                  <a class="button-green but-con hube" href="info/{{ Auth::user()->detail->id }}/edit"><i class="fa fa-arrow-circle-up seto"></i>Update data</a>
              @else
                  <a class="button-green but-con hub" href="{{ url('info/create/') }}"><i class="fa fa-arrow-circle-up seto"></i>Perbarui data</a>
              @endif
              {{-- <a class="button-green but-con" href="{{ url('info/create/') }}">Perbarui data</a> --}}
            </div>
          </div>
        </div>
      </div>

      {{-- Panel informasi pribadi --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Informasi Data Pribadi</h2>
        </div>
        <div class="profil-panel-body">
          <div class="identitas-pribadi-box">
            {{-- Detail info perkuliahan --}}
            <table class="info-contents">
              <tr>
                <td>Jenis Kelamin</td><td class="con">Laki-laki</td>
              </tr>
              <tr>
                <td>Kewarganegaraan</td><td class="con">Indonesia</td>
              </tr>
              <tr>
                <td>Tempat dan tanggal lahir</td><td class="con">7 Januari 1996</td>
              </tr>
              <tr>
                <td>Email</td><td class="con">lawliet.lind18@gmail.com</td>
              </tr>
              <tr>
                <td>Alamat Rumah</td><td class="con">Jalan Mawar No. 30 Bulusan, Semarang</td>
              </tr>
              <tr>
                <td>Nomor Telepon</td><td class="con">085740062767</td>
              </tr>
              <tr>
                <td>Sumber Dana</td><td class="con">Orang Tua</td>
              </tr>
              <tr>
                <td>Nama Ayah</td><td class="con">Nurdin Bachtiar</td>
              </tr>
              <tr>
                <td>Pekerjaan Ayah</td><td class="con">PNS</td>
              </tr>
              <tr>
                <td>Nama Ibu</td><td class="con">Khadijah</td>
              </tr>
              <tr>
                <td>Pekerjaan Ibu</td><td class="con">PNS</td>
              </tr>
              <tr>
                <td>Alamat Orang Tua</td><td class="con">Jalan Mawar No. 30 Bulusan, Semarang</td>
              </tr>
            </table>
          </div>
        </div>

      </div>

    </div>
</div>
@endsection

@extends('layouts.app')

@section('title')
    <title>Kelola Data Pekerjaan</title>
@endsection

@section('content')
<div style="background-color:rgb(237, 237, 237);" class="container-fluid">
    <div class="row">
      <h1 class="header-profil">Kelola Data Pekerjaan</h1>

      {{-- Panel Informasi Umum --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Identitas Pribadi</h2>
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
                <td>Status</td><td class="con">Terverifikasi</td>
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

      {{-- Panel Jenjang Pendidikan --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Informasi Pekerjaan</h2>
        </div>
        <div class="profil-panel-body">
          <div class="identitas-pribadi-box">
            {{-- Detail info pekerjaan --}}
            @if (Auth::user()->job)
                {{-- {{ Auth::user()->job->pekerjaan }} --}}
            <table class="info-contents">
              <tr>
                <td>Pekerjaan</td><td class="con">
                      {{ Auth::user()->job->pekerjaan }}
                </td>
              </tr>
              <tr>
                <td>Bidang pekerjaan</td><td class="con">
                      {{ Auth::user()->job->bidang_pekerjaan }}
                </td>
              </tr>
              <tr>
                <td>Alamat kantor</td><td class="con">
                      {{ Auth::user()->job->jalan }}, {{ Auth::user()->job->kota }}, {{ Auth::user()->job->provinsi }}
                </td>
              </tr>
              <tr>
                <td>Gaji</td><td class="con">
                      Rp {{ Auth::user()->job->gaji }}
                </td>
              </tr>
              <tr>
                <td>Jabatan</td><td class="con">
                      {{ Auth::user()->job->jabatan }}
                </td>
              </tr>
            </table>
            @else

            @endif
            <div class="footer-panel">
              <p class="ignore">
                @if (Auth::user()->job)
                    Data yang telah diverifikasi tidak dapat dirubah lagi
                @else
                    <span class="notif-update"><i class="fa fa-info-circle seth"></i>Perbarui informasi pekerjaan anda</span>
                @endif
              </p>
              @if (Auth::user()->job)
                  <a class="button-green but-con hube" href="pekerjaan/{{ Auth::user()->job->id }}/edit"><i class="fa fa-arrow-circle-up seto"></i>Update data</a>
              @else
                  <a class="button-green but-con hub" href="{{ url('pekerjaan/create/') }}"><i class="fa fa-arrow-circle-up seto"></i>Perbarui data</a>
              @endif
            </div>
          </div>
        </div>
      </div>

      {{-- Panel informasi pekerjaan --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Jenjang Pendidikan</h2>
        </div>
        <div class="profil-panel-body">
          <div class="identitas-pribadi-box">
            {{-- Detail info pekerjaan --}}
            <h4 style="margin-left:40px; margin-bottom:20px;">Pendidikan S1</h4>
            <table class="info-contents">
              <tr>
                {{-- Pendidikan S1 --}}
                <td>Pembimbing 1</td><td class="con">Nurdin Bachtiar</td>
                  <td class="fuxx">Tahun Masuk</td><td class="fuxtt">2014</td>
              </tr>
              <tr>
                <td>Pembimbing 2</td><td class="con">Indra Waspada</td>
                <td class="fuxx">Tahun Lulus</td><td class="fuxtt">2018</td>
              </tr>
              <tr>
                <td>Judul Skripsi</td>
                <td class="skripsi con">
                    Sistem Informasi Wisudawan Universitas Diponegoro dengan Metode Backpropagation
                </td>
                <td class="fuxx">Program Studi</td><td class="fuxtt">Ilmu Komputer</td>
              </tr>
            </table>

            <hr class="migrate">

            {{-- Pendidikan S2 --}}
            <h4 style="margin-left:40px; margin-bottom:20px;">Pendidikan S2</h4>
            <table class="info-contents">
              <tr>
                {{-- <th>Pendidikan S1</th> --}}
                <td>Pembimbing 1</td><td class="con">Nurdin Bachtiar</td>
                  <td class="fuxx">Tahun Masuk</td><td class="fuxtt">2014</td>
              </tr>
              <tr>
                <td>Pembimbing 2</td><td class="con">Indra Waspada</td>
                <td class="fuxx">Tahun Lulus</td><td class="fuxtt">2018</td>
              </tr>
              <tr>
                <td>Judul Skripsi</td>
                <td class="skripsi con">
                    Sistem Informasi Wisudawan Universitas Diponegoro dengan Metode Backpropagation
                </td>
                <td class="fuxx">Program Studi</td><td class="fuxtt">Ilmu Komputer</td>
              </tr>
            </table>

            <hr class="migrate">

            {{-- Pendidikan S3 --}}
            <h4 style="margin-left:40px; margin-bottom:20px;">Pendidikan S3</h4>
            <table class="info-contents">
              <tr>
                {{-- <th>Pendidikan S1</th> --}}
                <td>Pembimbing 1</td><td class="con">Nurdin Bachtiar</td>
                  <td class="fuxx">Tahun Masuk</td><td class="fuxtt">2014</td>
              </tr>
              <tr>
                <td>Pembimbing 2</td><td class="con">Indra Waspada</td>
                <td class="fuxx">Tahun Lulus</td><td class="fuxtt">2018</td>
              </tr>
              <tr>
                <td>Judul Skripsi</td>
                <td class="skripsi con">
                    Sistem Informasi Wisudawan Universitas Diponegoro dengan Metode Backpropagation
                </td>
                <td class="fuxx">Program Studi</td><td class="fuxtt">Ilmu Komputer</td>
              </tr>
            </table>

            <div class="footer-panel">
              <p class="ignore">Data yang telah diverifikasi tidak dapat dirubah lagi</p>
              <a class="button-green but-con" href="{{ url('update_info_pendidikan') }}">Perbarui data</a>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>
@endsection

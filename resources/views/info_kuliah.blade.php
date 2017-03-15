@extends ('layouts.app')


@section('title')
    <title>Update Info Kuliah</title>
@endsection

@section('content')

  <div class="container-fluid">

    <div class="row">
      <h1 class="header-profil">Update Info Kuliah</h1>

      {{-- Panel Upadate Info Kuliah --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Entry Data Mahasiswa</h2>
        </div>
        <div class="profil-panel-body">

          <p class="cita">Formulir pengisian data mahasiswa, isi sesuai dengan data yang terdapat pada KHS mahasiswa.
            Data yang di masukkan akan menjadi arsip bagi akademik fakultas.</p>

            <form class="update-form" action="index.html" method="post">

              {{-- Form input ipk --}}
              <label for="email" class="col-md-2 control-label">IPK</label>

              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- Form input predikat kelulusan --}}
              <label for="email" class="col-md-2 control-label">Predikat</label>

              <div class="col-md-10">
                <select style="margin-bottom:20px;" class="input-update" name="">
                  <option disabled="disabled" selected="selected" value="">Pilih salah satu ketegori</option>
                  <option value="">Memuaskan</option>
                  <option value="">Sangat Memuaskan</option>
                  <option value="">Cumlaude</option>
                </select>
              </div>

              {{-- Form input ipk --}}
              <label for="email" class="col-md-2 control-label">Lama Studi</label>

              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- Form input predikat kelulusan --}}
              <label for="email" class="col-md-2 control-label">Tahun Masuk</label>

              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- Form input ipk --}}
              <label for="email" class="col-md-2 control-label">Tahun Lulus</label>

              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- Form input predikat kelulusan --}}
              <label for="email" class="col-md-2 control-label">Status Cuti</label>

              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              <div class="footer-panel">
                <p class="col-md-7 update-text">Perbarui data inforrmasi kuliah</p>
                <a class="col-md-2 btn-red" href="{{ url('home') }}">Batal</a>
                <button class="button-green" type="submit" name="button">Perbarui data</button>
              </div>
            </form>

        </div>
      </div>

    </div>

  </div>

@endsection

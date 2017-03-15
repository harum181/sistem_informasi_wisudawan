@extends ('layouts.app')


@section('title')
    <title>Update Informasi Pekerjaan</title>
@endsection

@section('content')

  <div class="container-fluid">

    <div class="row">
      <h1 class="header-profil">Update Informasi Pekerjaan</h1>

      {{-- Panel Upadate Info Kuliah --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Informasi Pekerjaan</h2>
        </div>
        <div class="profil-panel-body">

          <p class="cita">Formulir pengisian data pendidikan mahasiswa, isi sesuai dengan data yang terdapat pada KHS mahasiswa.
            Data yang di masukkan akan menjadi arsip bagi akademik fakultas.</p>

            <hr>

            <form class="update-form" action="index.html" method="post">

              {{-- pekerjaan --}}
              <label for="email" class="col-md-2 control-label">Pekerjaan</label>

              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- bidang pekerjaan --}}
              <label for="email" class="col-md-2 control-label">Bidang Pekerjaan</label>

              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- alamat kantor --}}
              <label for="email" class="col-md-2 control-label">Alamat Kantor</label>

              <div class="col-md-10">
                <textarea style=
                "
                margin-bottom:20px;
                border-radius:4px;
                border-color:rgb(195, 195, 195);
                max-width:700px;
                font-family: 'Rubik';
                font-weight:300;
                padding: 10px
                "
                name="name" rows="5" cols="85">
                </textarea>
              </div>

                {{-- gaji --}}
                <label for="email" class="col-md-2 control-label">Gaji</label>

                <div class="col-md-10">
                  <input class="input-update form-update-control" type="text" name="" value="">
                </div>

                {{-- jabatan --}}
                <label for="email" class="col-md-2 control-label">Jabatan</label>

                <div class="col-md-10">
                  <input class="input-update form-update-control" type="text" name="" value="">
                </div>

                <div class="footer-panel">
                  <p class="col-md-7 update-text">Perbarui data inforrmasi kuliah</p>
                  <a class="col-md-2 btn-red" href="{{ url('pekerjaan') }}">Batal</a>
                  <button class="button-green" type="submit" name="button">Perbarui data</button>
                </div>

              </div>

            </form>

        </div>
      </div>

    </div>

  </div>

@endsection

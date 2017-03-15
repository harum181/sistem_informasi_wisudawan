@extends ('layouts.app')


@section('title')
    <title>Update Informasi Pendidikan</title>
@endsection

@section('content')

  <div class="container-fluid">

    <div class="row">
      <h1 class="header-profil">Update Informasi Pendidikan</h1>

      {{-- Panel Upadate Info Kuliah --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Jenjang Pendidikan</h2>
        </div>
        <div class="profil-panel-body">

          <p class="cita">Formulir pengisian data pendidikan mahasiswa, isi sesuai dengan data yang terdapat pada KHS mahasiswa.
            Data yang di masukkan akan menjadi arsip bagi akademik fakultas.</p>

            <hr>

            <form class="update-form" action="index.html" method="post">

              <h4 class="titos">Pendidikan S1</h4>

              {{-- pembimbing 1 --}}
              <label for="email" class="col-md-2 control-label">Pembimbing 1</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- pembimbing 2 --}}
              <label for="email" class="col-md-2 control-label">Pembimbing 2</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- judul skripsi --}}
              <label for="email" class="col-md-2 control-label">Judul Skripsi</label>
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
                {{-- <textarea class="input-update form-update-control" type="text" name="" value=""> --}}
              </div>

              {{-- tahun masuk --}}
              <label for="email" class="col-md-2 control-label">Tahun Masuk</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- tahun lulus --}}
              <label for="email" class="col-md-2 control-label">Tahun Lulus</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- program studi --}}
              <label for="email" class="col-md-2 control-label">Program Studi</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              <hr>

              <h4 class="titos">Pendidikan S2</h4>

              {{-- pembimbing 1 --}}
              <label for="email" class="col-md-2 control-label">Pembimbing 1</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- pembimbing 2 --}}
              <label for="email" class="col-md-2 control-label">Pembimbing 2</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- judul skripsi --}}
              <label for="email" class="col-md-2 control-label">Judul Skripsi</label>
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
                {{-- <textarea class="input-update form-update-control" type="text" name="" value=""> --}}
              </div>

              {{-- tahun masuk --}}
              <label for="email" class="col-md-2 control-label">Tahun Masuk</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- tahun lulus --}}
              <label for="email" class="col-md-2 control-label">Tahun Lulus</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- program studi --}}
              <label for="email" class="col-md-2 control-label">Program Studi</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              <hr>

              <h4 class="titos">Pendidikan S3</h4>

              {{-- pembimbing 1 --}}
              <label for="email" class="col-md-2 control-label">Pembimbing 1</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- pembimbing 2 --}}
              <label for="email" class="col-md-2 control-label">Pembimbing 2</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- judul skripsi --}}
              <label for="email" class="col-md-2 control-label">Judul Skripsi</label>
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
                {{-- <textarea class="input-update form-update-control" type="text" name="" value=""> --}}
              </div>

              {{-- tahun masuk --}}
              <label for="email" class="col-md-2 control-label">Tahun Masuk</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- tahun lulus --}}
              <label for="email" class="col-md-2 control-label">Tahun Lulus</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              {{-- program studi --}}
              <label for="email" class="col-md-2 control-label">Program Studi</label>
              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="" value="">
              </div>

              <div class="footer-panel">
                <p class="col-md-7 update-text">Perbarui data inforrmasi kuliah</p>
                <a class="col-md-2 btn-red" href="{{ url('pekerjaan') }}">Batal</a>
                <button class="button-green" type="submit" name="button">Perbarui data</button>
              </div>

            </form>

        </div>
      </div>

    </div>

  </div>

@endsection

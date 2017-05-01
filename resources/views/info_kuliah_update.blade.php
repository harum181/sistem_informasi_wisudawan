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

            <form class="update-form" action="/info/{{ $info_data->id }}" method="post">

              {{-- Form input ipk --}}
              <label for="email" class="col-md-2 control-label">IPK</label>

              <div class="col-md-10">
                <input class="input-update form-update-control" type="text" name="ipk" value=
                @if (Auth::user()->detail)
                    {{ Auth::user()->detail->ipk }}
                @else
                    IPK
                @endif>
              </div>

              {{-- Form input predikat kelulusan --}}
              <label for="email" class="col-md-2 control-label">Predikat</label>

              <div class="col-md-10">
                <select style="margin-bottom:20px;" class="input-update" name="predikat">
                  <option disabled="disabled" selected="selected" value="">Pilih salah satu ketegori</option>
                  <option value="Memuaskan">Memuaskan</option>
                  <option value="Sangat Memuaskan">Sangat Memuaskan</option>
                  <option value="Cumlaude">Cumlaude</option>
                </select>
              </div>

              {{-- Form input lama studi --}}
              <label for="email" class="col-md-2 control-label">Lama Studi</label>

              <div class="col-md-10">
                <input style="width:100px; float:left;" class="input-update form-update-control" type="text" name="lama_studi" value=
                @if (Auth::user()->detail)
                    {{ Auth::user()->detail->lama_studi }}
                @else
                    Lama studi di universitas diponegoro
                @endif> <span style="font-weight:200; margin-left:20px;">Tahun</span>
              </div>

              {{-- Form input tahun masuk --}}
              <label for="email" class="col-md-2 control-label">Tahun Masuk</label>

              <div class="col-md-10">
                <input style="width:100px; float:left;" class="input-update form-update-control" type="text" name="tgl_masuk" value=
                @if (Auth::user()->detail)
                    {{ Auth::user()->detail->tgl_masuk }}
                @else
                    Tahun masuk Universitas Diponegoro
                @endif>
              </div>

              {{-- Form input tahun lulus --}}
              <label for="email" class="col-md-2 control-label">Tahun Lulus</label>

              <div class="col-md-10">
                <input style="width:100px; float:left;" class="input-update form-update-control" type="text" name="tgl_lulus" value=
                @if (Auth::user()->detail)
                    {{ Auth::user()->detail->tgl_lulus }}
                @else
                    Tanggal lulus Universitas Diponegoro
                @endif>
              </div>

              {{-- Form input status cuti --}}
              <label for="email" class="col-md-2 control-label">Status Cuti</label>

              <div class="col-md-10">
                <select style="margin-bottom:20px;" class="input-update" name="status_cuti">
                  <option disabled="disabled" selected="selected" value="">Pilih salah satu ketegori</option>
                  <option value="Pernah Cuti Kuliah">Pernah Cuti Kuliah</option>
                  <option value="Belum Pernah Cuti">Belum Pernah Cuti</option>
                  <option value="Mangkir">Mangkir</option>
                </select>
              </div>

              <input type="hidden" name="_method" value="put">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

              <div class="footer-panel">
                <p class="col-md-7 update-text">Perbarui data inforrmasi kuliah</p>
                <a class="col-md-2 btn-red" href="{{ url('info') }}">Batal</a>
                <input class="button-green" type="submit" name="entry"></input>
              </div>
            </form>
          </div>
      </div>

    </div>

  </div>

@endsection

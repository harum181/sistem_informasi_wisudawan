<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\User;

class InfoKuliahController extends Controller
{

    public function index()
    {
        $data_wisuda = Detail::all();
        return view('info', ['data_wisuda' => $data_wisuda ]);
    }

    public function create()
    {
        return view('info_kuliah_create');
    }

    public function store(Request $request)
    {
        $data_wisuda = new Detail;
          $data_wisuda->ipk                = $request->ipk;
          $data_wisuda->predikat           = $request->predikat;
          $data_wisuda->lama_studi         = $request->lama_studi;
          $data_wisuda->tgl_masuk          = $request->tgl_masuk;
          $data_wisuda->tgl_lulus          = $request->tgl_lulus;
          $data_wisuda->status_cuti        = $request->status_cuti;
          $data_wisuda->user_id            = $request->user_id;
        $data_wisuda->save();

        return redirect('info')->with('message', 'data sudah di update');
    }

    public function show($id)
    {
        // $data_wisuda = Detail::where('title', $id);

        // $data_wisuda = Detail::find($id);
        //
        // if (!$data_wisuda) {
        //   abort(404);
        // }
        //
        // return view('info_kuliah')->with('info_data', $data_wisuda);
    }

    public function edit($id)
    {
        $data_wisuda = Detail::find($id);

        if (!$data_wisuda) {
          abort(404);
        }

        return view('info_kuliah_update')->with('info_data', $data_wisuda);
    }

    public function update(Request $request, $id)
    {
      $data_wisuda = Detail::find($id);
        $data_wisuda->ipk                = $request->ipk;
        $data_wisuda->predikat           = $request->predikat;
        $data_wisuda->lama_studi         = $request->lama_studi;
        $data_wisuda->tgl_masuk          = $request->tgl_masuk;
        $data_wisuda->tgl_lulus          = $request->tgl_lulus;
        $data_wisuda->status_cuti        = $request->status_cuti;
        $data_wisuda->user_id            = $request->user_id;
      $data_wisuda->save();

      return redirect('info')->with('message', 'data sudah di update');
    }
}

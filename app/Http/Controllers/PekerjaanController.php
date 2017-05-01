<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\User;

class PekerjaanController extends Controller
{

    public function index()
    {
        $data_pekerjaan = Job::all();
        return view('pekerjaan', ['data_pekerjaan' => $data_pekerjaan ]);
    }

    public function create()
    {
        return view('pekerjaan_create');
    }

    public function store(Request $request)
    {
        $data_pekerjaan = new Job;
          $data_pekerjaan->pekerjaan          = $request->pekerjaan;
          $data_pekerjaan->bidang_pekerjaan   = $request->bidang_pekerjaan;
          $data_pekerjaan->jalan              = $request->jalan;
          $data_pekerjaan->kota               = $request->kota;
          $data_pekerjaan->provinsi           = $request->provinsi;
          $data_pekerjaan->gaji               = $request->gaji;
          $data_pekerjaan->jabatan            = $request->jabatan;
          $data_pekerjaan->user_id            = $request->user_id;
        $data_pekerjaan->save();

        return redirect('pekerjaan')->with('message', 'data sudah di update');
    }

    public function edit($id)
    {
        $data_pekerjaan = Job::find($id);

        if (!$data_pekerjaan) {
          abort(404);
        }

        return view('pekerjaan_update')->with('info_pekerjaan', $data_pekerjaan);
    }

    public function update(Request $request, $id)
    {
        $data_pekerjaan = Job::find($id);
          $data_pekerjaan->pekerjaan          = $request->pekerjaan;
          $data_pekerjaan->bidang_pekerjaan   = $request->bidang_pekerjaan;
          $data_pekerjaan->jalan              = $request->jalan;
          $data_pekerjaan->kota               = $request->kota;
          $data_pekerjaan->provinsi           = $request->provinsi;
          $data_pekerjaan->gaji               = $request->gaji;
          $data_pekerjaan->jabatan            = $request->jabatan;
          $data_pekerjaan->user_id            = $request->user_id;
        $data_pekerjaan->save();

        return redirect('pekerjaan')->with('message', 'data sudah di update');
    }

}

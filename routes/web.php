<?php

Route::get('/', function () {
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web']], function(){
    Route::resource('/info', 'InfoKuliahController');
    Route::resource('/pekerjaan', 'PekerjaanController');
});

Route::get('/update_info_pendidikan', 'InfoPendidikanController@index');
Route::get('/update_info_pekerjaan', 'InfoPekerjaanController@index');

Route::get('/kelola_data_wisuda', function(){
  return view('kelola_data_wisuda');
});
Route::get('/alumni_tracer', function(){
  return view('alumni_tracer');
});
Route::get('/informasi_wisuda', function(){
  return view('informasi_wisuda');
});
Route::get('/menu', function(){
  return view('menu');
});
Route::get('/alumni_tracers', function(){
  return view('alumni_tracers');
});

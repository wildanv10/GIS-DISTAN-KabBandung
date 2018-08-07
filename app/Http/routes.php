<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//--------------------------------------------------------------------------------- Halaman Utama

Route::get('/', 'BerandaController@index');
Route::get('/beranda', 'BerandaController@index');
Route::get('/berita', 'BerandaController@halamanBerita');

//----controller lihat berita
Route::get('/berita-lihat/{judul}', 'BerandaController@tampilBerita');

//----controller galeri
Route::get('/galeri', 'BerandaController@halamanGaleri');

//----controller profil
Route::get('/profil', function () {
    return view('profil');
});

//----controller peta
Route::get('/peta', function () {
    return view('peta');
});

//----controller Chart
Route::resource('/chart', 'ChartController');
Route::get('/data', function () {
    return view('data');
});

//----controller kontak
Route::get('/kontak', function () {
    return view('kontak');
});


//--------------------------------------------------------------------------------- Panel Admin

Route::get('/login', array('as'=>'login','uses'=>'AdminController@login'));
Route::get('/admin/card', array('as'=>'cards','uses'=>'AdminController@cards'));
Route::get('/admin/chart', array('as'=>'chart','uses'=>'AdminController@chart'));
Route::get('/admin/table', array('as'=>'table','uses'=>'AdminController@table'));
Route::get('/admin/login', function(){
    if(\Auth::check()){
        return redirect('/admin');
    }
    else {
        return view('admin/login');
    }
    
});
Route::get('/admin/logout', 'AdminController@logout');

Route::auth();

Route::get('/admin', 'HomeController@index');
Route::get('/forgot', function(){
    return view('admin/forgot-password');
});


//----controller Pertanian
Route::get('admin/kategori', 'KategoriController@index');

Route::get('admin/pertanian/{pangan}', 'LiveEditController@tampil');
Route::post('admin/pertanian/updates', 'LiveEditController@updates');
//----controller Pertanian Pangan
Route::get('admin/pertanianpangan/{pangan}', 'LiveEditPanganController@tampil');
Route::post('admin/pertanianpangan/updates', 'LiveEditPanganController@updates');
//----controller Pertanian Ternak
Route::get('admin/pertanianternak/{pangan}', 'LiveEditTernakController@tampil');
Route::post('admin/pertanianternak/updates', 'LiveEditTernakController@updates');

//----controller Admin
Route::resource('admin/list-admin', 'HalamanAdminController');

//----controller galeri
Route::resource('admin/galeri','GaleriController');

//----controller Berita
Route::resource('admin/berita', 'BeritaController');

//----controller Kontak
Route::resource('admin/kontak', 'KontakController');


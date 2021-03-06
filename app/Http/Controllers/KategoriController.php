<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Http\Requests;

class KategoriController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $data['kategoriPangan'] = DB::table('kategori')
            ->where('kodekategori', '=', 'k001')
            ->orderBy('kodepangan', 'asc')
            ->get();

        $data['kategoriSayuran'] = DB::table('kategori')
            ->where('kodekategori', '=', 'k002')
            ->orderBy('kodepangan', 'asc')
            ->get();

        $data['kategoriBuah'] = DB::table('kategori')
            ->where('kodekategori', '=', 'k003')
            ->orderBy('kodepangan', 'asc')
            ->get();

        $data['kategoriBio'] = DB::table('kategori')
            ->where('kodekategori', '=', 'k004')
            ->orderBy('kodepangan', 'asc')
            ->get();

        $data['kategoriKebun'] = DB::table('kategori')
            ->where('kodekategori', '=', 'k005')
            ->orderBy('kodepangan', 'asc')
            ->get();

        $data['kategoriTernak'] = DB::table('kategori')
            ->where('kodekategori', '=', 'k006')
            ->orderBy('kodepangan', 'asc')
            ->get();

        return view('admin.pertanian.daftar-pertanian', $data);
    }
}

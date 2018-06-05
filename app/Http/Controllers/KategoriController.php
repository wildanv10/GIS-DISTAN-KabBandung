<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class KategoriController extends Controller
{
    public function index(){

        $data['kategoriPangan'] = DB::table('kategori')
            ->where('kodeKategori', '=', 'k001')
            ->orderBy('kodePangan', 'asc')
            ->get();

        $data['kategoriSayuran'] = DB::table('kategori')
            ->where('kodeKategori', '=', 'k002')
            ->orderBy('kodePangan', 'asc')
            ->get();

        $data['kategoriBuah'] = DB::table('kategori')
            ->where('kodeKategori', '=', 'k003')
            ->orderBy('kodePangan', 'asc')
            ->get();

        $data['kategoriBio'] = DB::table('kategori')
            ->where('kodeKategori', '=', 'K004')
            ->orderBy('kodePangan', 'asc')
            ->get();

        $data['kategoriKebun'] = DB::table('kategori')
            ->where('kodeKategori', '=', 'K005')
            ->orderBy('kodePangan', 'asc')
            ->get();

        return view('admin.pertanian.daftar-pertanian', $data);
    }
}

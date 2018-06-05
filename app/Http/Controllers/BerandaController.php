<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Berita;
use App\Galeri;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data['berita'] = DB::table('berita')
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
        $data['galeri'] = DB::table('galeri')->limit(8)->get();
        
        return view('beranda',$data);
    }

    public function halamanBerita(){
        
        $data['berita'] = DB::table('berita')
            ->orderBy('id', 'asc')
            ->paginate(5);
        
        return view('berita',$data);

    }

    public function tampilBerita($judul)
    {
        $tampilkan = Berita::where('slug_judul', $judul)->first();
        return view('berita-lihat')->with('tampilkan', $tampilkan);
    }

    public function halamanGaleri(){
        $data['galeri'] = DB::table('galeri')->get();

        return view('galeri', $data);
    }

    
}

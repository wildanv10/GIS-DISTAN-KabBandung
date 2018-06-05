<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Berita;
use App\User;

class BeritaController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $data['berita'] = DB::table('berita')
                ->orderBy('id', 'desc')
                ->get();
        return view('admin.berita.berita',$data);
    }

    public function create(){
        return view('admin.berita.tambah-berita');
    }

    public function store(Request $request){

        $tambah = new Berita();
        $tambah->judul = $request['judul'];
        $tambah->slug_judul = Str::slug($request['judul']);
        $tambah->pembuat = 'admin';
        $tambah->isi_berita = $request['isi_berita'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('foto_berita');
        $fileName   = $file->getClientOriginalName();
        $request->file('foto_berita')->move("images/img-berita/", $fileName);

        $tambah->foto_berita = $fileName;
        $tambah->save();

        return redirect('admin/berita');
    }

    public function show($id){
        $data['berita'] = Berita::find($id);

        return view('admin.berita.lihat-berita', $data);
    }

    public function edit($id){
        $data['berita'] = Berita::find($id);
        return view('admin.berita.edit-berita', $data);
    }

    public function update(Request $request, $id){
        $update = Berita::where('id', $id)->first();
        $update->judul = $request['judul'];
        $update->slug_judul = Str::slug($request['judul']);
        $update->isi_berita = $request['isi_berita'];

        if($request->file('foto_berita') != "")
        {
            $file       = $request->file('foto_berita');
            $fileName   = $file->getClientOriginalName();
            $request->file('foto_berita')->move("images/img-berita/", $fileName);
            $update->foto_berita = $fileName;
        } 
        else
        {
            $update->foto_berita = $update->foto_berita;
        }
        
        $update->update();

        return redirect('admin/berita');
    }

    public function destroy($id){
        Berita::find($id)->delete();

        return redirect('admin/berita');
    }
}

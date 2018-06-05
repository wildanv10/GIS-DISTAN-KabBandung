<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Galeri;

class GaleriController extends Controller
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
        $data['galeri'] = Galeri::all();
        return view('admin.galeri.galeri',$data);
    }

    public function create(){
        return view('admin.galeri.tambah-galeri');
    }

    public function store(Request $request){

        $tambah = new Galeri();
        $tambah->deskripsi = $request['deskripsi'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('foto');
        $fileName   = $file->getClientOriginalName();
        $request->file('foto')->move("images/img-galeri/", $fileName);

        $tambah->foto = $fileName;
        $tambah->save();

        return redirect('admin/galeri');

    }

    public function show($id){
        $data['galeri'] = Galeri::find($id);

        return view('admin.galeri.lihat-galeri', $data);
    }

    public function edit($id){
        $data['galeri'] = Galeri::find($id);
        return view('admin.galeri.edit-galeri', $data);
    }

    public function update(Request $request, $id){
        $update = Galeri::where('id', $id)->first();
        $update->deskripsi = $request['deskripsi'];

        if($request->file('foto') != "")
        {
            $file       = $request->file('foto');
            $fileName   = $file->getClientOriginalName();
            $request->file('foto')->move("images/img-galeri/", $fileName);
            $update->foto = $fileName;
        } 
        else
        {
            $update->foto = $update->foto;
        }
        
        $update->update();

        return redirect('admin/galeri');
    }

    public function destroy($id){
        Galeri::find($id)->delete();

        return redirect('admin/galeri');
    }
}

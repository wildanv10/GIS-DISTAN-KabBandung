<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Kontak;

class KontakController extends Controller
{
    

    public function index(){
        $data['kontak'] = DB::table('kontaks')->get();
        return view('admin.kontak.kontak',$data);
    }

    public function store(Request $request){

        $tambah = new Kontak();
        $tambah->namaKontak = $request['nama'];
        $tambah->emailKontak = $request['email'];
        $tambah->isiKontak = $request['isi'];

        $tambah->save();

        return redirect('kontak');
    }

    public function edit($id){
        $data['kontak'] = Kontak::find($id);
        return view('admin.kontak.balas-kontak', $data);
    }

    public function update(Request $request, $id){
        $update = Kontak::where('id', $id)->first();
        $update->namaKontak = $request['nama'];
        $update->emailKontak = $request['email'];
        $update->isiKontak = $request['isi'];
        $update->balasan = $request['balasan'];
        $update->isiBalasan = $request['isiBalasan'];
        
        $update->update();

        return redirect('admin/kontak');
    }

    public function destroy($id){
        Kontak::find($id)->delete();

        return redirect('admin/kontak');
    }
}

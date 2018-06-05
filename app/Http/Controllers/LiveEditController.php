<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class LiveEditController extends Controller
{
    
    public function index()
    {
        
    }

    public function tampil($pangan)
    {
        
        $data['buah'] = DB::table('dataPanganBuah')
            ->where('kodepangan', $pangan)
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.pertanian.liveedit', $data);
    }



    public function updates(Request $request){
        $data = array();
        $data['jumlahtanam'] = $request->jt;
        $data['jumlahtanamanmenghasilkan'] = $request->jtm;
        $data['produksi'] = $request->produksi;

        DB::table('dataPanganBuah')->where('id', $request->id)->update($data);
    }
}

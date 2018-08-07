<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class LiveEditPanganController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index()
    {
        
    }

    public function tampil($pangan)
    {
        
        $data['buah'] = DB::table('dataPangan')
            ->where('kodepangan', $pangan)
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.pertanian.liveeditpangan', $data);
    }



    public function updates(Request $request){
        $data = array();
        $data['luaslahan'] = $request->jt;
        $data['luastanam'] = $request->jtm;
        $data['produksi'] = $request->produksi;

        DB::table('dataPangan')->where('id', $request->id)->update($data);
    }
}

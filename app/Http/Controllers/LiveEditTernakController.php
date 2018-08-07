<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class LiveEditTernakController extends Controller
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
        
        $data['buah'] = DB::table('dataTernak')
            ->where('kodepangan', $pangan)
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.pertanian.liveeditternak', $data);
    }



    public function updates(Request $request){
        $data = array();
        $data['jantan'] = $request->jt;
        $data['betina'] = $request->jtm;

        DB::table('dataTernak')->where('id', $request->id)->update($data);
    }
}

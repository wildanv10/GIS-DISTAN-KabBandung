<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pangan'] = DB::table('kategori')
            ->orderBy('namapangan', 'asc')
            ->get();

        return view('chart', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data['pangan'] = DB::table('kategori')
            ->orderBy('namapangan', 'asc')
            ->get();
        
        //setting header to json
        header('Content-Type: application/json');

        //query to get data from the table
        $query = DB::table('dataPanganBuah')
        ->join('kategori', function($join)
        {
            $join->on('dataPanganBuah.kodepangan', '=', 'kategori.kodepangan');
        })
        ->where('dataPanganBuah.kodepangan', '=', $id)
        ->get();

        //loop through the returned data
        $data = array();
        foreach ($query as $row) {
            $data[] = $row;
        }
        

        //free memory associated with result
        $query = null;

        //now print the data
        print json_encode($data);
    }
}

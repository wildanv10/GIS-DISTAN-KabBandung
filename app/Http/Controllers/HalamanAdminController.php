<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use App\User;
use Auth;
use Hash;
use Validator;

class HalamanAdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['admin'] = DB::table('users')
            ->orderBy('name', 'asc')
            ->get();

        return view('admin.admin.list-admin', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.admin.tambah-admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // custom validator
        Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, \Auth::user()->password);
        });
 
        // message for custom validation
        $messages = [
            'password' => 'Invalid current password.',
        ];
 
        // validate form
        $validator = Validator::make(request()->all(), [
            'password'              => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
 
        ], $messages);
 
        // if validation fails
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }
        else{

            $tambah = new User();
            $tambah->name = $request['name'];
            $tambah->email = $request['email'];
            $tambah->password = bcrypt(request('password'));
            $tambah->save();

            return  redirect('admin/list-admin')
                ->withSuccess('Berhasil Menambahkan Admin.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['admin'] = User::find($id);
        return view('admin.admin.edit-admin', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = User::where('id', $id)->first();
        $update->name = $request['name'];
        $update->email = $request['email'];

        $pass = $request['password'];

        if($pass != null || $pass != ""){
            $update->password = bcrypt(request('password'));
        }

        
        $update->update();

        return redirect('admin/list-admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect('admin/list-admin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AdminController extends Controller
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

    public function login(){
        return view('admin.login');
    }

    public function cards(){
        return view('admin.cards');
    }

    public function chart(){
        return view('admin.charts');
    }

    public function table(){
        return view('admin.tables');
    }

    public function masuk(){
        return view('admin.login');
    }

    protected $redirectAfterLogout = '/admin';
    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect($this->redirectAfterLogout);
    }
}

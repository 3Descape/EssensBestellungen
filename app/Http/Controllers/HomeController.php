<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Adldap;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['test']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        return json_encode(Adldap::auth()->attempt('euler', 'password'));
    }
}

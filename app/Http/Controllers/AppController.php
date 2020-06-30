<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user=1)
    {
        $user = User::findOrFail($user);
        return view('welcome',  [ 'user' => $user ]);
    }
}

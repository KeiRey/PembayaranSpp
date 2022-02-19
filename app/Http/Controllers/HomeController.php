<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\siswa;
use App\kelas;
use App\User;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::paginate(10);
        $kelas = kelas::paginate(10);
        $siswa = siswa::paginate(10);
        return view('home',compact('siswa','kelas','user'));
    }
}

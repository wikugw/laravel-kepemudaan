<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Auth;
use Illuminate\Http\Request;

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
        $user = Auth::user();
        if($user->hasRole('organisasi')){
            return redirect()->route('/');
            // return redirect()->route('organisasi_kepemudaan.show', ['organisasi_kepemudaan' => $user->id_kelompok_potensi_pemuda]);
        }
        return redirect('organisasi_kepemudaan');
    }
}

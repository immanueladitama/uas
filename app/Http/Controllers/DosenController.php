<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index(){
        return view('Dosen.login');
    }
    public function home()
    {
    	return view('dosen.home');
    }

}
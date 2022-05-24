<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\pengunjung;                                                                                       

class anggota extends Controller
{
    public function index(){
    $pengunjung = Post::latest()->get();
        return view('pengunjung.index', compact('pengunjung'));
    }   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        echo "<h1>Ini adalah Halaman Mahasiswa</h1>";
        return "Ini merupakan method index di dalam controller mahasiswa";
    }
}

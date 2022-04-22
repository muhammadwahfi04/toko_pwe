<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        echo "<h1>Ini adalah Halaman Profil</h1>";
        return "Ini merupakan method index di dalam controller profil";
    }
}
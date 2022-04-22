<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
{
    public function index(){
        echo "<h1>Menu Penjualan</h1>";
        return "Ini adalah menu pejualan";
    }
}

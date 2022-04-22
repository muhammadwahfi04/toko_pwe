<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        echo "<h1>Contact</h1>";
        echo "<p>Email : muhammadwahfi@gmail.com</p>";
        echo "<p>Facebook : muhammad wahfi</p>";
        echo "<br>";
        return "Ini merupakan method index di dalam controller contact";
    }
}

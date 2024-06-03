<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name=null) {
        $data = compact("name");
        return view("index")->with($data);  
    }

    public function home() {
        return view("home");
    }

}

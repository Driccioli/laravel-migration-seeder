<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Package extends Controller
{
    public function index(){
        $packages = Trips::all();
        return view("home", $packages);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trips;

class Package extends Controller
{
    public function index(){
        $packages = Trips::all();
        return view("home", compact("packages"));
    }
}

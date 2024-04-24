<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeografiController extends Controller
{
    public function index(){
        return view("layout.content.geografi");
    }
}

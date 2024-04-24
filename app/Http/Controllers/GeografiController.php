<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profilekotaku;

class GeografiController extends Controller
{
    public function index(){
        return view("layout.content.geografi")->with([
            "judul"=> "Geografi Kota",
            "data"=> ProfileKotaku::first(),
        ]);
    }
}

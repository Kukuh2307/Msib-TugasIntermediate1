<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profilekotaku;

class PariwisataController extends Controller
{
    public function index(){
        return view("layout.content.pariwisata")->with([
            "judul"=> "Pariwisata",
            "data"=> ProfileKotaku::first(),
        ]);
    }
}

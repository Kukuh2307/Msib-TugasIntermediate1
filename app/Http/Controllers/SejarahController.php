<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\ProfileKotaku;

class SejarahController extends Controller
{
    public function index(){
        return view("layout.content.sejarah")->with([
            "judul"=> "Sejarah",
            "data"=> ProfileKotaku::first(),
        ]);
    }
}

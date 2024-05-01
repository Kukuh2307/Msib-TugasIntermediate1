<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profilekotaku;

class PariwisataController extends Controller
{
    public function index(){
        return view("layout.content.pariwisata.index")->with([
            "judul"=> "Pariwisata",
            "data"=> ProfileKotaku::first(),
        ]);
    }

    public function edit(){
        return view("layout.content.pariwisata.edit")->with([
            "judul"=> "Edit Pariwisata",
            "data"=> ProfileKotaku::first(),
        ]);
    }

    public function update(Request $request, $id){  
        $data = $request->validate([
            'wisataAlam' => 'required',
            'wisataPantai' => 'required',
            'wisataAir' => 'required',
            'wisataCandi' => 'required',
            'wisataKuliner' => 'required',
        ]);
        $pariwisata = ProfileKotaku::findOrFail($id);
        $pariwisata->update($data);
        return redirect()->route('pariwisata.index')->with('success', 'Pariwisata berhasil diperbarui');
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profilekotaku;

class GeografiController extends Controller
{
    public function index(){
        return view("layout.content.geografi.index")->with([
            "judul"=> "Geografi Kota",
            "data"=> ProfileKotaku::first(),
        ]);
    }

    public function edit(){
        return view("layout.content.geografi.edit")->with([
            "judul"=> "Edit Geografi",
            "data"=> ProfileKotaku::first(),
        ]);
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'nama' => 'required',
            'batasUtara' => 'required',
            'batasSelatan' => 'required',
            'batasBarat' => 'required',
            'batasTimur' => 'required',
            'topografi' => 'required',
            'iklim' => 'required',
        ]);
        $geografi = ProfileKotaku::findOrFail($id);
        $geografi->update($data);
        return redirect()->route('geografi.index')->with('success', 'Geografi berhasil diperbarui');
    }
}

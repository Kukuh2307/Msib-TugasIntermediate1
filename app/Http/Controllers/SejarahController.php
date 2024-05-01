<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\ProfileKotaku;

class SejarahController extends Controller
{
    public function index(){
        return view("layout.content.sejarah.index")->with([
            "judul"=> "Sejarah",
            "data"=> ProfileKotaku::first(),
        ]);
    }

    public function edit(){
        return view("layout.content.sejarah.edit")->with([
            "judul"=> "Edit Sejarah",
            "data"=> ProfileKotaku::first(),
        ]);
    }

    public function update(Request $request, $id)
{
    $data = $request->validate([
        'sejarah' => 'required',
    ], [
        'sejarah.required' => 'Sejarah harus diisi',
    ]);

    $profile = ProfileKotaku::findOrFail($id);
    $profile->update($data);

    return redirect()->route('sejarah.index')->with('success', 'Sejarah berhasil diperbarui');
}
}

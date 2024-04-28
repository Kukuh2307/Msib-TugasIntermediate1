<?php

namespace App\Http\Controllers;

use App\Models\Beach;
use Illuminate\Http\Request;

class BeachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layout.beach.index')->with([
            "judul" => "Pantai",
            'data' => Beach::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.beach.create')->with([
            "judul" => "Tambah Pantai"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $data = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'nama.required' => 'Nama harus diisi',
            'deskripsi.required' => 'Deskripsi harus diisi',
            'lokasi.required' => 'Lokasi harus diisi',
            'gambar.required' => 'Gambar harus diisi',
            'gambar.mimes' => 'Gambar harus berupa jpeg,png,jpg,gif,svg',
            'gambar.max' => 'Gambar tidak boleh lebih dari 2 MB',
        ]);
        if($request->hasFile('gambar')){
            $namaGambar = $request->file('gambar')->hashName();
            $request->file('gambar')->move(public_path('Pantai'), $namaGambar);
            $data['gambar'] = $namaGambar;
        }
        Beach::create($data);

        return redirect()->route('beach.index')->with('success', 'Pantai berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $beachEdit = Beach::where('id', $id)->first();
        return view('layout.beach.edit')->with([
            "judul" => "Edit Pantai",
            'data' => $beachEdit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'deskripsi' => 'required',
        'lokasi' => 'required',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ], [
        'nama.required' => 'Nama harus diisi',
        'deskripsi.required' => 'Deskripsi harus diisi',
        'lokasi.required' => 'Lokasi harus diisi',
        'gambar.mimes' => 'Gambar harus berupa jpeg, png, jpg, gif, atau svg',
        'gambar.max' => 'Gambar tidak boleh lebih dari 2 MB',
    ]);

    $beach = Beach::findOrFail($id);

    $data = $request->except('_token', '_method');

    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika bukan default
        if ($beach->gambar != 'default.jpg') {
            unlink(public_path('Pantai/' . $beach->gambar));
        }

        // Upload gambar baru
        $namaGambar = $request->file('gambar')->hashName();
        $request->file('gambar')->move(public_path('Pantai'), $namaGambar);
        $data['gambar'] = $namaGambar;
    }

    $beach->update($data);

    return redirect()->route('beach.index')->with('success', 'Pantai berhasil diubah');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Beach::find($id);
        $data->delete();
        return redirect()->route('beach.index')->with('success', 'Pantai berhasil dihapus');
    }
}

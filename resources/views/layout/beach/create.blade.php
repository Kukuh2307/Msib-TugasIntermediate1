@extends('layout.main')

@section('content')
<div class="h-[100vh] mt-20">
    <div class="text-left flex justify-between pr-32 h-20">
        <h3 class="text-3xl font-semibold hover:text-blue-400 hover:transition-all text-center mb-20">Tambah Pantai</h3>
    </div>
    <form action="{{ route('beach.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mt-6 border-t border-gray-100 text-left">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <label for="nama" class="text-2xl font-medium leading-6 text-gray-900 py-5">Nama Pantai</label>
                    <input type="text" name="nama" id="nama" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" placeholder="Masukkan Nama Pantai" required />
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <label for="lokasi" class="text-2xl font-medium leading-6 text-gray-900">Lokasi</label>
                    <textarea name="lokasi" id="lokasi" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" placeholder="Masukkan lokasi" required></textarea>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <label for="deskripsi" class="text-2xl font-medium leading-6 text-gray-900">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" cols="30" rows="10" placeholder="Masukkan deskripsi" required></textarea>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <label for="gambar" class="text-2xl font-medium leading-6 text-gray-900">Upload Foto</label>
                    <input type="file" name="gambar" id="gambar" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" required />
                </div>
            </dl>
        </div>
        <button class="ml-2 text-blue-500 bg-blue-100 px-4 h-10 py-2 rounded-md hover:text-blue-900 flex items-center" type="submit">Simpan</button>
    </form>
</div>
@endsection

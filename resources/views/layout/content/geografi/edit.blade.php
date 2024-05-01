@extends('layout.main')

@section('content')
    <div class="text-left">
      <h3 class="mt-[2.9rem] text-3xl pl-10 font-semibold hover:text-blue-400 hover:transition-all text-center">{{ $judul }}</h3>
    </div>
    <form action="{{ route('geografi.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="mt-6 border-t border-gray-100 text-left ml-10">
        <dl class="divide-y divide-gray-100">
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-2xl font-medium leading-6 text-gray-900">Nama Kota</dt>
            <input type="text" name="nama" id="nama" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" placeholder="Masukkan Nama Kota" required value="{{ old('nama', $data->nama) }}"/>
          </div>
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
              <dt class="text-2xl font-medium leading-6 text-gray-900">Batas Wilayah:</dt>
          </div>
          <div class="ml-12">
              <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-xl font-medium leading-6 text-gray-500">1. Utara</dt>
                  <input type="text" name="batasUtara" id="batasUtara" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" placeholder="Masukkan Batas Utara" required value="{{ old('batasUtara', $data->batasUtara) }}"/>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-xl font-medium leading-6 text-gray-500">2. Selatan</dt>
                    <input type="text" name="batasSelatan" id="batasSelatan" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" placeholder="Masukkan Batas Utara" required value="{{ old('batasSelatan', $data->batasSelatan) }}"/>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-xl font-medium leading-6 text-gray-500">3. Barat</dt>
                    <input type="text" name="batasBarat" id="batasBarat" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" placeholder="Masukkan Batas Utara" required value="{{ old('batasBarat', $data->batasBarat) }}"/>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-xl font-medium leading-6 text-gray-500">4. Timur</dt>
                    <input type="text" name="batasTimur" id="batasTimur" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" placeholder="Masukkan Batas Utara" required value="{{ old('batasTimur', $data->batasTimur) }}"/>
                </div>
          </div>
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-2xl font-medium leading-6 text-gray-900">Topografi</dt>
            <textarea name="topografi" id="topografi" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" cols="30" rows="10">{{ old('topografi', $data->topografi) }}</textarea>
          </div>
  
          <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-2xl font-medium leading-6 text-gray-900">Iklim</dt>
            <textarea name="iklim" id="iklim" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" cols="30" rows="10">{{ old('iklim', $data->iklim) }}</textarea>
            <button type="submit" class=" text-indigo-500 bg-indigo-100 h-10 rounded-md hover:text-indigo-900 flex justify-center items-center w-32 mb-5">Ubah</button>
          </div>
        </dl>
      </div>    
    </form>
    
@endsection

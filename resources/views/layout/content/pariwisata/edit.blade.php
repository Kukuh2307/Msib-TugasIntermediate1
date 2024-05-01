@extends('layout.main')

@section('content')
    <h3 class="mt-[2.9rem] text-3xl pl-10 font-semibold hover:text-blue-400 hover:transition-al mb-5">{{ $judul }}</h3>
<form action="{{ route('pariwisata.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <dl class="divide-y divide-gray-100 ml-10">
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-2xl font-medium leading-6 text-gray-900 text-left">Wisata Alam</dt>
            <textarea name="wisataAlam" id="wisataAlam" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" cols="30" rows="10">{{ $data->wisataAlam }}</textarea>
        </div>

        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-2xl font-medium leading-6 text-gray-900 text-left">Wisata Pantai</dt>
            <textarea name="wisataPantai" id="wisataPantai" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" cols="30" rows="10">{{ $data->wisataPantai }}</textarea>
        </div>

        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-2xl font-medium leading-6 text-gray-900 text-left">Wisata Air</dt>
            <textarea name="wisataAir" id="wisataAir" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" cols="30" rows="10">{{ $data->wisataAir }}</textarea>
        </div>

        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-2xl font-medium leading-6 text-gray-900 text-left">Wisata Candi</dt>
            <textarea name="wisataCandi" id="wisataCandi" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" cols="30" rows="10">{{ $data->wisataCandi }}</textarea>
        </div>

        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-2xl font-medium leading-6 text-gray-900 text-left">Wisata Kuliner</dt>
            <textarea name="wisataKuliner" id="wisataKuliner" class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 focus:outline-none border-0" cols="30" rows="10">{{ $data->wisataKuliner }}</textarea>
            <button class=" text-indigo-500 bg-indigo-100 h-10 rounded-md hover:text-indigo-900 flex justify-center items-center w-32 mb-5">Ubah</button>
        </div>
    </dl>
</form>
@endsection

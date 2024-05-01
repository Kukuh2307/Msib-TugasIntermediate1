@extends('layout.main')

@section('content')
    <h3 class="mt-[2.9rem] text-3xl pl-10 font-semibold hover:text-blue-400 hover:transition-all">{{ $judul }}</h3>

    <form action="{{ route('sejarah.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <textarea name="sejarah" class="text-2xl pt-5 text-justify" cols="120" rows="20">{{ $data->sejarah }}</textarea>
        <button type="submit" class="ml-2 text-indigo-500 bg-indigo-100 h-10 rounded-md hover:text-indigo-900 flex justify-center items-center w-32 mb-5">Ubah</button>
    </form>
@endsection

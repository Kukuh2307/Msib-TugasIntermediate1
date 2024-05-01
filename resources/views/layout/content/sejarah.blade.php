@extends('layout.main')
@section('content')
    <h3 class="mt-[2.9rem] text-3xl pl-10 font-semibold hover:text-blue-400 hover:transition-all">{{ $judul }}</h3>
    <a href="sejarah/edit" class="ml-2 text-indigo-500 bg-indigo-100  h-10 rounded-md hover:text-indigo-900 flex justify-center items-center w-32">Edit</a>
    @php
    $sejarah = $data->sejarah;
    $paragraphs = explode('</p>', $sejarah);
    foreach ($paragraphs as $paragraph) {
        echo '<div class="text-2xl pt-5 text-justify">' . $paragraph . '</div>';
    }
    @endphp

@endsection

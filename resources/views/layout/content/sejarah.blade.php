@extends('layout.main')
@section('content')
    <h3 class="mt-[2.9rem] text-3xl pl-10 font-semibold hover:text-blue-400 hover:transition-all">{{ $judul }}</h3>
    @php
    $sejarah = $data->sejarah;
    $paragraphs = explode('</p>', $sejarah);
    foreach ($paragraphs as $paragraph) {
        echo '<div class="text-2xl pt-5 text-justify">' . $paragraph . '</div>';
    }
    @endphp

@endsection

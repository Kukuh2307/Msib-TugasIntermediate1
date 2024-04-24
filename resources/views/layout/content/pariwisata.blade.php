@extends('layout.main')

@section('content')
<h3 class="mt-[2.9rem] text-3xl pl-10 font-semibold hover:text-blue-400 hover:transition-al mb-5">Pariwisata</h3>
<dl class="divide-y divide-gray-100">
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-2xl font-medium leading-6 text-gray-900 text-left">Wisata Alam</dt>
        <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-left">{{ $data->wisataAlam }}</dd>
      </div>
    
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-2xl font-medium leading-6 text-gray-900 text-left">Wisata Pantai</dt>
        <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-left">{{ $data->wisataPantai }}</dd>
      </div>

      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-2xl font-medium leading-6 text-gray-900 text-left">Wisata Air</dt>
        <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-left">{{ $data->wisataAir }}</dd>
      </div>

      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-2xl font-medium leading-6 text-gray-900 text-left">Wisata Candi</dt>
        <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-left">{{ $data->wisataCandi }}</dd>
      </div></dl>

      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-2xl font-medium leading-6 text-gray-900 text-left">Wisata Kuliner</dt>
        <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0 text-left">{{ $data->wisataKuliner }}
        </dd>
      </div></dl>
  </div>

@endsection
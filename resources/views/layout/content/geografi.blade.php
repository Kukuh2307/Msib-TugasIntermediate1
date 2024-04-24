@extends('layout.main')
@section('content')
<div>
    <div class="text-left">
      <h3 class="mt-[2.9rem] text-3xl pl-10 font-semibold hover:text-blue-400 hover:transition-all text-center">{{ $judul }}</h3>
    </div>
    <div class="mt-6 border-t border-gray-100 text-left">
      <dl class="divide-y divide-gray-100">
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-2xl font-medium leading-6 text-gray-900">Nama Kota</dt>
          <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $data->nama }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
            <dt class="text-2xl font-medium leading-6 text-gray-900">Batas Wilayah:</dt>
        </div>
        <div class="ml-12">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                <dt class="text-xl font-medium leading-6 text-gray-500">1.Utara</dt>
                <dd class="mt-1 text-xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $data->batasUtara }}</dd>
              </div>
              <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-xl font-medium leading-6 text-gray-500">2.Selatan</dt>
                  <dd class="mt-1 text-xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $data->batasSelatan }}</dd>
              </div>
              <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-xl font-medium leading-6 text-gray-500">3. Barat</dt>
                  <dd class="mt-1 text-xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $data->batasBarat }}</dd>
              </div>
              <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                  <dt class="text-xl font-medium leading-6 text-gray-500">4. Timur</dt>
                  <dd class="mt-1 text-xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $data->batasTimur }}</dd>
              </div>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-2xl font-medium leading-6 text-gray-900">Topografi</dt>
          <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
            <p>{{ $data->topografi }}</p>
          </dd>
        </div>

        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-2xl font-medium leading-6 text-gray-900">Iklim</dt>
          <dd class="mt-1 text-2xl leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
            <p>{{ $data->iklim }}</p>
          </dd>
        </div>
      </dl>
    </div>
  </div>
  @endsection  
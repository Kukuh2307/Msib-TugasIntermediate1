@extends('layout.main')
@section('content')
<div class="text-left h-[100vh]">
    <div class="flex justify-between pr-32 h-20 items-end">
        <h3 class="mt-[2.9rem] text-3xl pl-10 font-semibold hover:text-blue-400 hover:transition-all">Pantai</h3>
        <a href="beach/create" class="ml-2 text-blue-500 bg-blue-100 px-4 h-10 py-2 rounded-md hover:text-blue-900 flex items-center">Tambah</a>
    </div>
    <table class="mt-5 min-w-full divide-y divide-gray-200 overflow-x-auto">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nomor
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nama Pantai
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="width: 20%">
                    Lokasi
                </th>
                <th scope="col" class="px-6 py-3 max-w-10 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Deskripsi
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 text-left">
            @php
                $no = 1;
            @endphp
            @foreach ($data as $d)
            <tr>
                <td class="py-4 whitespace-nowrap text-center">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full">
                        {{ $no++ }}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        @if (isset($d->gambar) && $d->gambar != null)
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="{{ asset('Pantai/' . $d->gambar) }}" alt="pantai">
                            </div>
                        @else
                            <div class="flex-shrink-0 h-10 w-10">
                                <svg class="h-10 w-10 fill-current text-gray-300" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                        @endif
    
                        <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                                {{ $d->nama }}
                            </div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4 w-10">
                    <div class="text-sm text-gray-900">{{ $d->lokasi }}</div>
                </td>
                <td class="px-6 py-4 w-10">
                    <span class="inline-block max-w-[300px] text-sm leading-5 font-semibold truncate">
                        <p class="truncate ">
                            {{ $d->deskripsi }}
                        </p>
                    </span>
                </td>                   
                <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                    <a href="#" class="text-indigo-600 bg-indigo-100 px-4 py-2 rounded-md hover:text-indigo-900">Edit</a>
                    <form action="{{ route('beach.destroy', $d->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 bg-red-100 px-4 py-2 rounded-md hover:text-red-900" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
                
    
    
        </tbody>
    </table>
</div>
@endsection
@extends('layouts.admin')

@section('title')
    Katalog
@endsection

@section('content')
    <div class="mb-12">
        <a href="{{ route('admin.katalog.create') }}" class="btn btn-primary px-5">Tambah Katalog</a>
    </div>
    <table class="w-full text-sm text-left text-neutral-500 rounded-md overflow-hidden">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                    Detail
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Promo
                </th>
                <th scope="col" class="px-6 py-3">
                    Gambar
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($katalog as $index => $item)
                <tr class="bg-white">
                    <td scope="col" class="px-6 py-3">
                        {{ $index + 1 }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $item->nama }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $item->kategori }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $item->detail }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $item->harga }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $item->harga_promo }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        @isset($item->gambar)
                            @foreach ($item->gambar as $gambar)
                                <img src="{{ asset('storage/images/' . $gambar) }}" width="40" height="40"
                                    class="object-cover border-[1px] border-slate-300" alt="">
                            @endforeach
                        @endisset
                    </td>
                    <td scope="col" class="px-6 py-3">
                        <div class="flex flex-col gap-2 items-center">
                            <a href="{{ route('admin.katalog.edit', $item->id) }}">Edit</a>
                            <form action="{{ route('admin.katalog.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <img src="{{ asset('assets/img/x-square.svg') }}" alt="">
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

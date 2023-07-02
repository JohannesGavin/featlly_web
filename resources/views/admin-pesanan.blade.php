@extends('layouts.admin')

@section('title')
    Pesanan
@endsection

@section('content')
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
                    Barang
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    Jumlah
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Keterangan
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $index => $order)
                <tr class="bg-white">
                    <td scope="col" class="px-6 py-3">
                        {{ $index + 1 }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $order->user->name }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $order->barang }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $order->user->alamat }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $order->jumlah }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $order->harga }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $order->keterangan }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

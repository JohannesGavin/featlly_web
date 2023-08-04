@extends('layouts.admin')

@section('title')
    Pesanan
@endsection

@section('content')
    {{-- {{ dd($orders) }} --}}
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
                    Jumlah
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Keterangan
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
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
                        <ol class="list-disc">
                            @foreach ($orderCarts[$order->id] as $item)
                                <li>{{ $item->katalog->nama }}</li>
                            @endforeach
                        </ol>
                    </td>
                    <td scope="col" class="px-6 py-3">
                        <ul>
                            @foreach ($orderCarts[$order->id] as $item)
                                <li class="w-max">{{ $item->count }} buah</li>
                            @endforeach
                        </ul>
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $order->user->alamat }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        Rp{{ number_format($order->harga, 2, '.', ',') }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        <div
                            class="px-2 py-1 rounded-md border-[1px] {{ $order->status === 'Dikonfirmasi' ? 'done border-green-700 text-green-700' : 'border-orange-400 wait text-orange-400' }} w-max">
                            {{ $order->status }}
                        </div>
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ $order->keterangan }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        <div class="flex gap-2 items-center">
                            <a target="_blank"
                                class="{{ $order->bukti_pembayaran ? '' : 'pointer-events-none opacity-40' }}"
                                href={{ asset('storage/images/' . $order->bukti_pembayaran) }}>
                                <box-icon name='show-alt'></box-icon>
                            </a>
                            <form method="POST" action="{{ route('acc-post', ['orderId' => $order->id]) }}">
                                @csrf
                                <button class="{{ $order->status === "Dikonfirmasi" || $order->status === "Ditolak" ? 'pointer-events-none opacity-40' : '' }}">
                                    <box-icon name='check'></box-icon>
                                </button>
                            </form>
                            <form method="POST" action="{{ route('reject-post', ['orderId' => $order->id]) }}">
                                @csrf
                                <button class="{{ $order->status === "Dikonfirmasi" || $order->status === "Ditolak" ? 'pointer-events-none opacity-40' : '' }}">
                                    <box-icon name='x'></box-icon>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <style>
        .done,
        .wait {
            width: max-content;
            padding: 4px 8px;
        }

        .done {
            border-color: rgb(3 84 63);
            color: rgb(3 84 63);
        }

        .wait {
            border-color: #d97706;
            color: #d97706;
        }
    </style>
@endsection

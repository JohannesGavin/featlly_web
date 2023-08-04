@extends('layouts.app')

@section('content')
    <main class="py-14 mb-20">
        <section class="container px-4">
            <h1 class="headline font-bold mb-10 text-center md:text-left">Pesanan</h1>
            @include('components.pesanan-mobile')
            <div class="hidden md:flex flex-col max-w-[1025px] gap-7">
                <div class="row head grid grid-cols-6 gap-8">
                    <p class="col-span-2 footnote">
                        Produk
                    </p>
                    <p class="footnote">
                        Jumlah
                    </p>
                    <p class="footnote">
                        Pembayaran
                    </p>
                    <p class="footnote">
                        Status
                    </p>
                    <p class="footnote">
                        Total
                    </p>
                </div>
                <hr>

                @foreach ($orders as $order)
                    <div class="row head grid grid-cols-6 gap-8 text-[18px] text-[#575758]">
                        <div class="flex gap-3 items-start col-span-2 flex-col">
                            @foreach ($orderCarts[$order->id] as $item)
                                <div class="flex justify-between">
                                    <div class="flex gap-3 items-center">
                                        <img src="{{ asset('storage/images/' . $item->katalog->gambar[0]) }}"
                                            class="rounded-xl bg-[#E0E0E0] h-[95px] w-[95px]" alt="">
                                        <p class="">{{ $item->katalog->nama }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="flex items-center flex-col gap-20 justify-center">
                            @foreach ($orderCarts[$order->id] as $item)
                                <div>{{ $item->count }} buah</div>
                            @endforeach
                        </div>
                        <div class="flex items-center gap-2">
                            @if ($order->status === 'Sudah Bayar')
                                <p class="text-center w-full">Selesai</p>
                            @else
                                <a href="{{ route('confirm', ['orderId' => $order->id]) }}"
                                    class="btn py-3 !w-fit min-w-0 px-10 flex items-center text-center">Bayar</a>
                            @endif
                        </div>
                        <div class="flex items-center">
                            {{ $order->status }}
                        </div>
                        <div class="flex items-center">
                            Rp{{ number_format($order->harga, 2, '.', ',') }}
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </section>

    </main>
@endsection

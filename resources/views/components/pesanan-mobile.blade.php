<div class="flex flex-col gap-3 md:hidden">

    @foreach ($orders as $order)
        <div class="grid grid-cols-6 gap-2">
            <div class="col-span-4 flex flex-col gap-3">
                @foreach ($orderCarts[$order->id] as $item)
                    <div class="col-span-4 grid grid-cols-4">
                        <div class="flex gap-3 items-center col-span-2">
                            <img src="{{ asset('storage/images/' . $item->katalog->gambar[0]) }}"
                                class="rounded-xl bg-[#E0E0E0] h-[110px] w-[110px]" alt="">
                        </div>
                        <div class="col-span-2">
                            <p class="text-sm md:text-base">{{ $item->katalog->nama }}</p>
                            <p class="text-sm md:text-base">{{ $order->status }}</p>
                            <p class="text-sm md:text-base">{{ $item->count }} buah</p>
                            <p class="text-sm md:text-base">Rp{{ number_format(($item->katalog->harga_promo ?? $item->katalog->harga) * $item->count, 2, '.', ',') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex items-center justify-end gap-2 col-span-2">
                @if ($order->status === 'Sudah Bayar')
                    <p class="">Selesai</p>
                @else
                <a href="{{ route('confirm', ['orderId' => $order->id]) }}"
                        class="btn py-2 px-8 min-w-0 items-center text-center">Bayar</a>
                @endif
            </div>
        </div>
        <hr>
    @endforeach
</div>

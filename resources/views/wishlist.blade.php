@extends('layouts.app')

@section('content')
    <main class="py-14 mb-20">
        <section class="container px-4">
            @if (session('success'))
                <div class="bg-green-100 p-3 rounded-md col-span-12 mb-5 text-green-800">{{ session('success') }}</div>
            @endif
            <h1 class="title-3 mb-4">Wishlist</h1>
            <div class="flex flex-col max-w-[1025px] gap-7">
                <div class="row head hidden lg:grid grid-cols-6 gap-8">
                    <p class="col-span-2 footnote">
                        Produk
                    </p>
                    <p class="footnote">
                        Harga
                    </p>
                    <p class="footnote">
                        Keranjang
                    </p>
                    <p class="footnote">
                        Hapus
                    </p>
                </div>
                <hr>
                {{-- PRODUCT CARD --}}
                @foreach ($wishlists as $wishlist)
                    <div class="row head grid grid-cols-6 gap-8 text-[18px] text-[#575758]">
                        <div class="flex gap-3 items-center col-span-4 md:col-span-2">
                            <img src="{{ asset('storage/images/' . $wishlist->katalog->gambar[0]) }}"
                                class="rounded-xl bg-[#E0E0E0] h-[95px] w-[95px]" alt="">
                            <div>
                                <a href="{{ route('detail', ['id' => $wishlist->katalog->id]) }}"
                                    class="text-sm md:text-base">{{ $wishlist->katalog->nama }}</a>
                                <p class="lg:hidden text-sm">
                                    Rp{{ number_format($wishlist->katalog->harga_promo ?? $wishlist->katalog->harga, 2, '.', ',') }}
                                </p>
                            </div>
                        </div>
                        <div class="lg:flex items-center hidden">
                            Rp{{ number_format($wishlist->katalog->harga_promo ?? $wishlist->katalog->harga, 2, '.', ',') }}
                        </div>
                        <div class="flex items-center gap-2 lg:col-span-1">
                            <form method="post"
                                action="{{ route('add-to-cart-wishlist', ['wishlistId' => $wishlist->id]) }}">
                                @csrf
                                <button class="flex gap-2 items-center">
                                    <img src="{{ asset('/assets/img/cart.svg') }}" alt="">
                                </button>
                            </form>
                        </div>
                        <div class="flex items-center">
                            <form action="{{ route('delete-wishlist', ['wishlistId' => $wishlist->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button><img src="{{ asset('/assets/img/x-square.svg') }}" alt=""></button>
                            </form>
                        </div>
                    </div>

                    <hr>
                @endforeach

                @if (count($wishlists) !== 0)
                    <div class="col-span-6 flex flex-col items-end">
                        <div class="flex gap-6 items-center">
                            <p class="text-[20px]">Total</p>
                            <p class="font-bold text-xl md:text-[30px]">Rp{{ number_format($totalPrice, 2, '.', ',') }}</p>
                        </div>
                    </div>
                @else
                    <p class="text-slate-400">Wishlist kosong silahkan tambahkan beberapa item kesukaanmu...</p>
                @endif
            </div>
        </section>

    </main>
@endsection

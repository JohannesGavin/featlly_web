@extends('layouts.app')

@section('content')
    <main class="py-14 md:mb-20">
        <section class="container px-4">
            @if (session('success'))
                <div class="bg-green-100 p-3 rounded-md col-span-12 mb-5 text-green-800">{{ session('success') }}</div>
            @endif
            <h1 class="title-3 mb-4">Keranjang</h1>
            <div class="flex flex-col max-w-[1025px] gap-7">
                <div class="row head hidden lg:grid grid-cols-6 gap-8">
                    <p class="col-span-2 footnote">
                        Produk
                    </p>
                    <p class="footnote">
                        Harga
                    </p>
                    <p class="footnote">
                        Jumlah
                    </p>
                    <p class="footnote">
                        Total
                    </p>
                    <p class="footnote">
                        Hapus
                    </p>
                </div>
                <hr>
                @foreach ($carts as $cart)
                    <div class="row head grid grid-cols-6 lg:grid-cols-6 gap-8 text-[18px] text-[#575758]">
                        <div class="flex order-1 gap-3 items-center col-span-5 md:col-span-2">
                            <img src="{{ asset('storage/images/' . $cart->katalog->gambar[0]) }}"
                                class="rounded-xl bg-[#E0E0E0] h-[95px] w-[95px]" alt="">
                            <div>
                            <a href="{{ route('detail', ['id' => $cart->katalog->id]) }}">{{ $cart->katalog->nama }}</a>
                                <p class="lg:hidden text-sm">
                                    Rp{{ number_format($cart->katalog->harga_promo ?? $cart->katalog->harga, 2, '.', ',') }}
                                </p>
                                <div class="order-2 md:hidden flex lg:order-3 items-center gap-2 mt-2">
                                    <form action="{{ route('dec-cart', ['cartId' => $cart->id]) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button><img src="{{ asset('/assets/img/minus-circle.svg') }}"
                                                alt=""></button>
                                    </form>
                                    {{ $cart->count }}
                                    <form action="{{ route('inc-cart', ['cartId' => $cart->id]) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button><img src="{{ asset('/assets/img/plus-circle.svg') }}"
                                                alt=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="order-3 hidden lg:order-2 lg:flex items-center">
                            Rp{{ number_format($cart->katalog->harga_promo ?? $cart->katalog->harga, 2, '.', ',') }}
                        </div>

                        <div class="order-2 hidden md:flex lg:order-3 items-center gap-2">
                            <form action="{{ route('dec-cart', ['cartId' => $cart->id]) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button><img src="{{ asset('/assets/img/minus-circle.svg') }}" alt=""></button>
                            </form>
                            {{ $cart->count }}
                            <form action="{{ route('inc-cart', ['cartId' => $cart->id]) }}" method="post">
                                @csrf
                                @method('PUT')
                                <button><img src="{{ asset('/assets/img/plus-circle.svg') }}" alt=""></button>
                            </form>
                        </div>

                        <div class="order-4 hidden md:flex items-center">
                            Rp{{ number_format(($cart->katalog->harga_promo ?? $cart->katalog->harga) * $cart->count, 2, '.', ',') }}
                        </div>
                        <div class="md:col-span-2 order-5 lg:col-span-1 flex items-center">
                            <form action="{{ route('delete-cart', ['cartId' => $cart->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button><img src="{{ asset('/assets/img/x-square.svg') }}" alt=""></button>
                            </form>
                        </div>
                    </div>
                @endforeach

                @if (count($carts) !== 0)
                    <hr>

                    <hr>
                    <div class="col-span-6 flex flex-col items-end">
                        <div class="flex gap-6 items-center">
                            <p class="text-[20px]">Total</p>
                            <p class="font-bold text-xl md:text-[30px]">Rp{{ number_format($totalPrice, 2, '.', ',') }}</p>
                        </div>
                        <a href="{{ route('buy-info') }}" class="btn-outline mt-6">Checkout</a>
                    </div>
                @else
                    <p class="text-slate-400">Keranjang kosong silahkan tambahkan beberapa item terlebih dahulu...</p>
                @endif
            </div>
        </section>

    </main>
@endsection

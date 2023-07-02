@extends('layouts.app')

@section('content')
    <main class="py-14 mb-20">
        <section class="container px-4">
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
                <div class="row head grid grid-cols-6 gap-8 text-[18px] text-[#575758]">
                    <div class="flex gap-3 items-center col-span-4 md:col-span-2">
                        <img src="{{ asset('assets/img/baju.png') }}" class="rounded-xl bg-[#E0E0E0] h-[95px] w-[95px]"
                            alt="">

                        <div>
                            <p class="text-sm md:text-base">Crewneck Plato Projector</p>
                            <p class="lg:hidden text-sm">Rp99.000</p>
                        </div>
                    </div>
                    <div class="lg:flex items-center hidden">
                        Rp99.000
                    </div>
                    <div class="flex items-center gap-2 lg:col-span-1">
                        <button class="flex gap-2 items-center">
                            <img src="{{ asset('/assets/img/cart.svg') }}" alt="">
                        </button>
                    </div>
                    <div class="flex items-center">
                        <button class="flex gap-2 items-center">
                            <img src="{{ asset('/assets/img/x-square.svg') }}" alt="">
                        </button>
                    </div>
                </div>

                <hr>
                <div class="row head grid grid-cols-6 gap-8 text-[18px] text-[#575758]">
                    <div class="flex gap-3 items-center col-span-4 md:col-span-2">
                        <img src="{{ asset('assets/img/baju.png') }}" class="rounded-xl bg-[#E0E0E0] h-[95px] w-[95px]"
                            alt="">

                        <div>
                            <p class="text-sm md:text-base">Crewneck Plato Projector</p>
                            <p class="lg:hidden text-sm">Rp99.000</p>
                        </div>
                    </div>
                    <div class="lg:flex items-center hidden">
                        Rp99.000
                    </div>
                    <div class="flex items-center gap-2 lg:col-span-1">
                        <button class="flex gap-2 items-center">
                            <img src="{{ asset('/assets/img/cart.svg') }}" alt="">
                        </button>
                    </div>
                    <div class="flex items-center">
                        <button class="flex gap-2 items-center">
                            <img src="{{ asset('/assets/img/x-square.svg') }}" alt="">
                        </button>
                    </div>
                </div>
                <hr>
                <div class="col-span-6 flex flex-col items-end">
                    <div class="flex gap-6 items-center">
                        <p class="text-[20px]">Total</p>
                        <p class="font-bold text-xl md:text-[30px]">Rp198.000</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

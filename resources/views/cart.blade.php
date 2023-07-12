@extends('layouts.app')

@section('content')
    <main class="py-14 md:mb-20">
        <section class="container px-4">
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
                <div class="row head grid grid-cols-6 lg:grid-cols-6 gap-8 text-[18px] text-[#575758]">
                    <div class="flex order-1 gap-3 items-center col-span-5 md:col-span-2">
                        <img src="{{ asset('assets/img/baju.png') }}" class="rounded-xl bg-[#E0E0E0] h-[95px] w-[95px]"
                            alt="">
                        <div>
                            <p class="text-sm md:text-base">Crewneck Rainbow</p>
                            <p class="lg:hidden text-sm">Rp99.000</p>
                            <div class="order-2 md:hidden flex lg:order-3 items-center gap-2 mt-2">
                                <button><img height="18" width="18" src="{{ asset('/assets/img/minus-circle.svg') }}" alt=""></button>
                                1
                                <button><img height="18" width="18" src="{{ asset('/assets/img/plus-circle.svg') }}" alt=""></button>
                            </div>
                        </div>
                    </div>
                    <div class="order-3 hidden lg:order-2 lg:flex items-center">
                        Rp99.000
                    </div>
                    
                    <div class="order-2 hidden md:flex lg:order-3 items-center gap-2">
                        <button><img src="{{ asset('/assets/img/minus-circle.svg') }}" alt=""></button>
                        1
                        <button><img src="{{ asset('/assets/img/plus-circle.svg') }}" alt=""></button>
                    </div>

                    <div class="order-4 hidden md:flex items-center">
                        Rp99.000
                    </div>
                    <div class="md:col-span-2 order-5 lg:col-span-1 flex items-center">
                        <button><img src="{{ asset('/assets/img/x-square.svg') }}" alt=""></button>
                    </div>
                </div>

                <hr>

                
                <div class="col-span-6 flex flex-col items-end">
                    <div class="flex gap-6 items-center">
                        <p class="text-[20px]">Total</p>
                        <p class="font-bold text-xl md:text-[30px]">Rp99.000</p>
                    </div>
                    <a href="{{ route('buy-info') }}" class="btn-outline mt-6">Checkout</a>
                </div>
            </div>
        </section>

    </main>
@endsection

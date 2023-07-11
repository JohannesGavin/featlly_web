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

                <div class="row head grid grid-cols-6 gap-8 text-[18px] text-[#575758]">
                    <div class="flex gap-3 items-center col-span-2">
                        <img src="{{ asset('assets/img/baju.png') }}" class="rounded-xl bg-[#E0E0E0] h-[95px] w-[95px]"
                            alt="">

                        <p class="">Crewneck Plato Projector</p>
                    </div>
                    <div class="flex items-center">
                        Rp99.000
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="{{ route('confirm') }}"
                            class="btn py-3 !w-fit min-w-0 px-10 flex items-center text-center">Bayar</a>
                    </div>
                    <div class="flex items-center">
                        Belum bayar
                    </div>
                    <div class="flex items-center">
                        Rp 198.000
                    </div>
                </div>
                <hr>

                <div class="row head grid grid-cols-6 gap-8 text-[18px] text-[#575758]">
                    <div class="flex gap-3 items-center col-span-2">
                        <img src="{{ asset('assets/img/baju.png') }}" class="rounded-xl bg-[#E0E0E0] h-[95px] w-[95px]"
                            alt="">

                        <p class="">Crewneck Plato Projector</p>
                    </div>
                    <div class="flex items-center">
                        Rp99.000
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="{{ route('confirm') }}" class="btn py-3 !w-fit min-w-0 px-10 flex items-center text-center">Bayar</a>
                    </div>
                    <div class="flex items-center">
                        Belum bayar
                    </div>
                    <div class="flex items-center">
                        Rp 198.000
                    </div>
                </div>
                <hr>
            </div>
        </section>

    </main>
@endsection

@extends('layouts.app')

@section('content')
    <main class="py-14 mb-20">
        <section class="container px-4">
            <h1 class="headline font-bold mb-10 text-center md:text-left">Riwayat Pembelian</h1>
            <div class="flex flex-col max-w-[1025px] gap-7">
                <div class="row head hidden md:grid grid-cols-6 gap-8">
                    <p class="footnote">
                        Tanggal
                    </p>
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
                </div>
                <hr>

                <div class="row head grid grid-cols-6 gap-8 text-[18px] text-[#575758]">
                    <div class="flex text-sm md:text-base gap-3 items-center col-span-2 md:col-span-1">
                        07/01/2023
                    </div>
                    <div class="flex gap-3 items-center col-span-4 md:col-span-2">
                        <img src="{{ asset('assets/img/baju.png') }}" class="rounded-xl bg-[#E0E0E0] h-[95px] w-[95px]"
                            alt="">
                        <div>
                            <p class="text-sm md:text-base">Crewneck Rainbow</p>
                            <div class="mt-1 text-sm md:text-base md:hidden flex items-center gap-2">
                                2 buah
                            </div>
                            <div class="mt-1 text-sm md:text-base md:hidden flex items-center">
                                Rp 203.000
                            </div>
                        </div>
                    </div>
                    <div class="items-center hidden md:flex">
                        Rp99.000
                    </div>
                    <div class="items-center gap-2 hidden md:flex">
                        1 item
                    </div>
                    <div class="items-center hidden md:flex">
                        Rp99.000
                    </div>
                </div>
                <hr>
            </div>
        </section>

    </main>
@endsection

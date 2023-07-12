@extends('layouts.app')

@section('content')
    <main class="py-14 mb-20">
        <section class="container px-4">
            <div class="flex flex-col max-w-[1025px] gap-4 md:gap-7">
                {{-- alamat --}}
                <div class="row head grid grid-cols-6 gap-2 md:gap-8">
                    <div class="col-span-6 footnote flex justify-between items-center">
                        <p class="font-bold">Alamat</p>
                        <a href="/buy-info" class="text-primary-main">Ubah</a>
                    </div>
                </div>
                <hr>
                <div class="col-span-5 text-sm md:text-lg text-neutral-500">
                    {{ auth()->user()->name }}
                    <br>
                    {{ auth()->user()->alamat }}
                </div>

                {{-- Rincian pesanan --}}
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-6 footnote flex justify-between items-center">
                        <p class="font-bold">Rincian Pesanan</p>
                    </div>
                </div>
                <hr>
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="flex gap-3 items-center col-span-6 lg:col-span-2">
                        <img src="{{ asset('assets/img/baju.png') }}" class="rounded-xl bg-[#E0E0E0] h-[95px] w-[95px]"
                            alt="">
                        <div class="">
                            <p class="text-neutral-500 text-sm md:text-base">Crewneck Plato Projector</p>
                            <p class="text-neutral-500 text-sm md:hidden md:text-base">Rp 99.000</p>
                            <p class="text-neutral-500 text-sm md:hidden md:text-base">2 Buah</p>
                            <p class="text-neutral-500 text-sm md:hidden md:text-base mt-2">Rp 198.000</p>
                        </div>
                    </div>
                    <p class="md:flex hidden col-span-2 lg:col-span-1 items-center">Rp 99.000</p>
                    <p class="md:flex hidden col-span-2 lg:col-span-1 items-center">2 Buah</p>
                    <p class="md:flex hidden col-span-2 lg:col-span-1 items-center">Rp 198.000</p>
                </div>

                {{-- Metode pengiriman --}}
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-6 footnote flex justify-between items-center">
                        <p class="font-bold">Metode Pengiriman</p>
                    </div>
                </div>
                <hr>
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-4">
                        <label for="" class="flex gap-4">
                            <input type="radio" name="" id="">
                            <div>
                                <p class="text-sm md:text-base">JNT - Reguler</p>
                                <p class="text-sm md:text-base">1-2 hari</p>
                            </div>
                        </label>
                    </div>
                    <div class="col-span-2 flex items-start">
                        Rp 5.000
                    </div>
                </div>
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-4">
                        <label for="" class="flex gap-4">
                            <input type="radio" name="" id="">
                            <div>
                                <p class="text-sm md:text-base">SiCepat</p>
                                <p class="text-sm md:text-base">2-5 hari</p>
                            </div>
                        </label>
                    </div>
                    <div class="col-span-2 flex items-start">
                        Gratis
                    </div>
                </div>

                {{-- Metode pembayaran --}}
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-6 footnote flex justify-between items-center">
                        <p class="font-bold">Metode Pembayaran</p>
                    </div>
                </div>
                <hr>
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-3">
                        <label for="" class="flex gap-4">
                            <input type="radio" name="" id="">
                            <p class="text-sm md:text-base">OVO / +62 878 70883466</p>
                        </label>
                    </div>
                </div>
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-3">
                        <label for="" class="flex gap-4">
                            <input type="radio" name="" id="">
                            <p class="text-sm md:text-base">Gopay / +62 878 70883466</p>
                        </label>
                    </div>
                </div>
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-3">
                        <label for="" class="flex gap-4">
                            <input type="radio" name="" id="">
                            <p class="text-sm md:text-base">BCA / 0060xxxxxx</p>
                        </label>
                    </div>
                </div>

                {{-- Rincian Pembayaran --}}
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-6 footnote flex justify-between items-center">
                        <p class="font-bold">Rincian Pembayaran</p>
                    </div>
                </div>
                <hr>
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-4">
                        <p class="">Total Produk</p>
                    </div>
                    <div class="col-span-2 flex items-start">
                        Rp 198.000
                    </div>
                </div>
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-4">
                        <p class="">Total Pengiriman</p>
                    </div>
                    <div class="col-span-2 flex items-start">
                        Rp 5.000
                    </div>
                </div>

                {{-- Total --}}
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-6 footnote flex justify-between items-center">
                        <p class="font-bold">Total Pembayaran</p>
                    </div>
                </div>
                <hr>
                <div class="row head grid grid-cols-6 gap-8">
                    <div class="col-span-3 footnote flex justify-between items-center">
                        <p class="text-lg md:headline">Total</p>
                    </div>
                    <div class="col-span-3 footnote flex justify-between items-center">
                        <p class="text-lg md:headline">Rp 203.000</p>
                    </div>
                </div>
            </div>
            <form action="{{ route('complete-order') }}" method="post">
                @csrf
                <button type="submit" class="btn mt-12 md:mt-28 w-full lg:w-[440px]">Buat Pesanan</button>
            </form>
        </section>

    </main>
@endsection
